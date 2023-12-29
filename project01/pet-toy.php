<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project:01: Product Pet Toy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li>
                    <a href="./index.php">
                        Home
                    </a>
                </li>
                <li>
                    <a href="./product-category.php" target="_blank">
                       Category
                    </a>
                </li>
                <li>
                    <a href="./brand.php" target="_blank">
                        Brand
                    </a>
                </li>
                <li>
                    <a href="./toy-size.php" target="_blank">
                        Toy Size
                    </a>
                </li>
                <li>
                    <a href="./pet-toy.php" target="_blank">
                        Pet Toys
                    </a>
                </li>

            </ul>
        </nav>
    </header>

    <main>
        <?php

            require_once 'connect/dbconnect.php';
            require_once 'models/pet-toy-model.php';  
            require_once 'controllers/pet-toy-controller.php'; 
            require_once 'views/pet-toy-view.php'; 

            $model = new PetToyModel($link);
            $controller = new PetToyController($model);
            $view = new PetToyView();

            // Form post submission
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $categoryID = isset($_POST['categoryID']) ? $_POST['categoryID'] : '';
                $brandID = isset($_POST['brandID']) ? $_POST['brandID'] : '';
                $toyName = isset($_POST['toyName']) ? $_POST['toyName'] : '';
                $sizeID = isset($_POST['sizeID']) ? $_POST['sizeID'] : '';

                // Validate input

                $result = $controller->addPetToy($categoryID, $brandID, $toyName, $sizeID);

                if (!$result) {
                    echo "<h3 class='error'>Failed to add pet toy. Please check your input.</h3>";
                }
            }

            // Handle delete action
            if (isset($_GET['action']) && $_GET['action'] === 'delete') {
                $petToyID = isset($_GET['id']) ? $_GET['id'] : null;

                if ($petToyID !== null) {
                    $result = $controller->deletePetToy($petToyID);

                    if ($result) {
                        echo "<h4>Pet toy with ID $petToyID deleted successfully.</h4>";
                    } else {
                        echo "<h4>Failed to delete pet toy with ID $petToyID.</h4>";
                    }
                }
            }

            // Displays pet toys and the form
            $petToys = $controller->getAllPetToys();
            $categories = $controller->getAllCategories();
            $brands = $controller->getAllBrands();
            $sizes = $controller->getAllSizes();
            $view->displayPetToys($petToys, $categories, $brands, $sizes);
        ?>

    </main>
</body>
</html>
