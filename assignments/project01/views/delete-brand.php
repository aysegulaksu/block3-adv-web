<?php

require_once 'connect/dbconnect.php';
require_once 'models/product-brand-model.php';
require_once 'controllers/product-brand-controller.php';

$model = new ProductBrandModel($link);
$controller = new ProductBrandController($model);

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $brandID = $_GET['id'];

    $result = $controller->deleteBrand($brandID);

    if ($result) {
        echo "Brand with ID $brandID deleted successfully.";
    } else {
        echo "Failed to delete brand with ID $brandID. Reason: You cannot delete this brand because there are products associated with it. Please delete the associated products first.";

    }
} else {
    echo "Invalid request.";
}
?>
