<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class ProductController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function addProduct($categoryID, $brandID, $productName, $typeID) {
        // Validate input 
        return $this->model->addProduct($categoryID, $brandID, $productName, $typeID);
    }

    public function getAllProducts() {
        return $this->model->getAllProducts();
    }

    public function deleteProduct($productID) {
        return $this->model->deleteProduct($productID);
    }

    public function getAllCategories() {
        return $this->model->getAllCategories();
    }

    public function getAllBrands() {
        return $this->model->getAllBrands();
    }

    public function getAllTypes() {
        return $this->model->getAllTypes();
    }
}
?>

