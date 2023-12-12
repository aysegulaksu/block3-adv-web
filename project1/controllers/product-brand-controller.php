<?php

class ProductBrandController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function insertBrand($brand) {
        // Check- the brand already exists or not (case-insensitive)
        $existingBrands = $this->model->getAllBrands();
        foreach ($existingBrands as $existingBrand) {
            if (strcasecmp($existingBrand['brand'], $brand) === 0) {
                return false; // Brand already exists, do not insert
            }
        }

        // Brand does not exist, proceed with insertion
        return $this->model->insertBrand($brand);
    }

    public function getAllBrands() {
        return $this->model->getAllBrands();
    }
}
?>
