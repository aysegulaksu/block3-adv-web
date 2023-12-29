
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-01: Product Toy Size</title>
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
