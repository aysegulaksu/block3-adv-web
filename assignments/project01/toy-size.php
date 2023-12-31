
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-01: Product Toy Size</title>
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
            require_once 'models/toy-size-model.php';
            require_once 'controllers/toy-size-controller.php';
            require_once 'views/toy-size-view.php';

            $model = new ToySizeModel($link);
            $controller = new ToySizeController($model);
            $view = new ToySizeView();

        // Form post submission
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $newSize = isset($_POST['newSize']) ? $_POST['newSize'] : '';

                if (!empty($newSize)) {
                    $result = $controller->insertSize($newSize);

                    if (!$result) {
                        echo "<p style='color: red;'>Size already exists. Please choose a different size.</p>";
                    }
                }
            }

            // Delete
            if (isset($_GET['action']) && $_GET['action'] === 'delete') {
                $sizeID = isset($_GET['id']) ? $_GET['id'] : null;

                if ($sizeID !== null) {
                    $result = $controller->deleteSize($sizeID);

                    if ($result) {
                        echo "Size with ID $sizeID deleted successfully.";
                    } else {
                        echo "Failed to delete size with ID $sizeID.";
                    }
                }
        }   

        // Display sizes and the form
        $sizes = $controller->getAllSizes();
        $view->displaySizes($sizes);
    ?>

</main>
</body>
</html>
