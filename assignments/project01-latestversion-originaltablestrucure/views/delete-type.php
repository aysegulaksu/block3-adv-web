<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <nav>
            <ul>
            <li>
                    <a href="./product-type.php">
                        Type
                    </a>
                </li>
                <li>
                    <a href="">
                       Category
                    </a>
                </li>
                <li>
                    <a href="./brand.php">
                        Brand
                    </a>
                </li>

            </ul>
        </nav>
    </header>
    <main>
    <?php

require_once '../connect/dbconnect.php';
require_once '../models/product-type-model.php';
require_once '../controllers/product-type-controller.php';

$model = new ProductTypeModel($link);
$controller = new ProductTypeController($model);

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $typeID = $_GET['id'];

    $result = $controller->deleteType($typeID);

    if ($result) {
        // Type deleted successfully, direct to product-type.php
        header("Location: ../product-type.php");
        exit;
    } else {
        echo "<h3>Failed to delete type with ID $typeID. Reason: You cannot delete this type because there are products associated with it. Please delete the associated products first.</h3>";
    }
} else {
    echo "Invalid request.";
}
?>


    </main>
</body>
</html>






