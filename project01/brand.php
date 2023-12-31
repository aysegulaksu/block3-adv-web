<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project:01 - Brand</title>
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

        require_once 'connect/dbconnect.php';
        require_once 'models/product-brand-model.php';
        require_once 'controllers/product-brand-controller.php';
        require_once 'views/product-brand-view.php';

        $model = new ProductBrandModel($link);
        $controller = new ProductBrandController($model);
        $view = new ProductBrandView();

        // Form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newBrand = isset($_POST['newBrand']) ? $_POST['newBrand'] : '';

            if (!empty($newBrand)) {
                $result = $controller->insertBrand($newBrand);

                if (!$result) {
                    echo "<p style='color: red;'>Brand already exists.      Please choose a different brand.</p>";
                }
            }
        }

        //  Delete action
        if (isset($_GET['action']) && $_GET['action'] === 'delete') {
            $brandID = isset($_GET['id']) ? $_GET['id'] : null;

            if ($brandID !== null) {
                $result = $controller->deleteBrand($brandID);

                if ($result) {
                    echo "Brand with ID $brandID deleted successfully.";
                } else {
                    echo "Failed to delete brand with ID $brandID.";
                }
            }
        }

        // Display brands and the form
        $brands = $controller->getAllBrands();
        $view->displayBrands($brands);
    ?>


    </main>
</body>
</html>

