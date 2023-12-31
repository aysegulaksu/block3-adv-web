<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
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
                    <a href="./product-type.php">
                       Type
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
                    <a href="./product.php">
                        Product
                    </a>
                </li>
            </ul>
        </nav>
    </header>
<!-- end of header -->
    <main>
    <?php
        require_once 'connect/dbconnect.php';
        require_once 'models/product-type-model.php';
        require_once 'controllers/product-type-controller.php';
        require_once 'views/product-type-view.php';

        $model = new ProductTypeModel($link);
        $controller = new ProductTypeController($model);
        $view = new ProductTypeView();

        // Form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newType = isset($_POST['newType']) ? $_POST['newType'] : '';

            if (!empty($newType)) {
                $result = $controller->insertType($newType);

                if ($result === true) {
                    echo "<h4>Product type added successfully!</h4>";
                } elseif (!$result) {
                    echo "<h3>Product type already exists. Please choose a different type.</h3>";
                }
            }
        }

        // Displays types and the form
        $types = $controller->getAllTypes();
        $view->displayTypes($types);
        ?>

    </main>
</body>
</html>


