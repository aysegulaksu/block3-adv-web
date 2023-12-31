<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project:01: Product Pet Food</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
                    <a href="./product-category.php">
                       Category
                    </a>
                </li>
                <li>
                    <a href="./brand.php">
                        Brand
                    </a>
                </li>
                <li>
                    <a href="./toy-size.php" >
                        Toy Size
                    </a>
                </li>
                <li>
                    <a href="./pet-toy.php" >
                        Pet Toy
                    </a>
                </li>
                <li>
                    <a href="./pet-food.php" >
                        Pet Food
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
    <?php

    error_reporting(E_ALL); 
    ini_set('display_errors', 1);

    require_once 'connect/dbconnect.php';
    require_once 'models/pet-food-model.php';  
    require_once 'controllers/pet-food-controller.php'; 
    require_once 'views/pet-food-view.php'; 

    $model = new PetFoodModel($link);
    $controller = new PetFoodController($model);
    $view = new PetFoodView();

    // Form post submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $categoryID = isset($_POST['categoryID']) ? $_POST['categoryID'] : '';
        $brandID = isset($_POST['brandID']) ? $_POST['brandID'] : '';
        $foodName = isset($_POST['foodName']) ? $_POST['foodName'] : '';
        $expirationDate = isset($_POST['expirationDate']) ? $_POST['expirationDate'] : '';

        // Validate input
        $result = $controller->addPetFood($categoryID, $brandID, $foodName, $expirationDate);

        if ($result === 'success') {
            echo "<h3 class='success'>Pet food added successfully!</h3>";
        } elseif ($result === 'failed') {
            echo "<h3 class='error'>Failed to add pet food. Please check your input.</h3>";
        }
    }

    // Delete action
    if (isset($_GET['action']) && $_GET['action'] === 'delete') {
        $petFoodID = isset($_GET['id']) ? $_GET['id'] : null;

        if ($petFoodID !== null) {
            $result = $controller->deletePetFood($petFoodID);

            if ($result) {
                echo "<h4>Pet food with ID $petFoodID deleted successfully.</h4>";
            } else {
                echo "<h4>Failed to delete pet food with ID $petFoodID.</h4>";
            }
        }
    }

    // Display pet foods and the form
    $petFoods = $controller->getAllPetFoods();
    $categories = $controller->getAllCategories();
    $brands = $controller->getAllBrands();
    $view->displayPetFoods($petFoods, $categories, $brands, []);
    ?>
    </main>
</body>
</html>
