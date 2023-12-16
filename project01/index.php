<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <?php

require_once 'connect/dbconnect.php';
require_once 'models/product-brand-model.php';
require_once 'controllers/product-brand-controller.php';
require_once 'views/product-brand-view.php';

$model = new ProductBrandModel($link);
$controller = new ProductBrandController($model);
$view = new ProductBrandView();

// form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newBrand = isset($_POST['newBrand']) ? $_POST['newBrand'] : '';

    if (!empty($newBrand)) {
        $result = $controller->insertBrand($newBrand);

        if (!$result) {
            echo "<p style='color: red;'>Brand already exists. Please choose a different brand.</p>";
        }
    }
}

// Displays brands and the form
$brands = $controller->getAllBrands();
$view->displayBrands($brands);
?>


    </main>

</body>
</html>