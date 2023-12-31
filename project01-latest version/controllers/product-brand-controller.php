<?php

class ProductBrandController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function insertBrand($brand) {
        // Check if the brand already exists
        $existingBrands = $this->model->getAllBrands();
        foreach ($existingBrands as $existingBrand) {
            if (strcasecmp($existingBrand['brand'], $brand) === 0) {
                return false; // Brand already exists, do not insert
            }
        }

        // Brand does not exist, insert brand
        return $this->model->insertBrand($brand);
    }

    public function getAllBrands() {
        return $this->model->getAllBrands();
    }

    public function deleteBrand($brandID) {
        return $this->model->deleteBrand($brandID);
    }
}
?>

