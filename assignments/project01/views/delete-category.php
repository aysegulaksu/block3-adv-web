<?php

require_once '../connect/dbconnect.php';
require_once '../models/product-category-model.php';
require_once '../controllers/product-category-controller.php';

$model = new ProductCategoryModel($link);
$controller = new ProductCategoryController($model);

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $categoryID = $_GET['id'];

    $result = $controller->deleteCategory($categoryID);

    if ($result) {
        echo "Category with ID $categoryID deleted successfully.";
        // Redirect to product-category.php 
        header("Location: ../product-category.php");
        exit;
    } else {
        echo "Failed to delete category with ID $categoryID. Reason: You cannot delete this category because there are products associated with it. Please delete the associated products first.";
    }
} else {
    echo "Invalid request.";
}
?>




