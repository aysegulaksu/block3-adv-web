<?php

class PetToyController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function addPetToy($categoryID, $brandID, $toyName, $sizeID) {
        $existingToys = $this->model->getAllPetToys();

        foreach ($existingToys as $existingToy) {
            if (
                $existingToy['category'] == $categoryID &&
                $existingToy['brand'] == $brandID &&
                $existingToy['toyName'] == $toyName &&
                $existingToy['size'] == $sizeID
            ) {
                return false; // Pet toy already exists, do not insert
            }
        }

        return $this->model->addPetToy($categoryID, $brandID, $toyName, $sizeID);
    }

    public function getAllPetToys() {
        return $this->model->getAllPetToys();
    }

    public function deletePetToy($petToyID) {
        return $this->model->deletePetToy($petToyID);
    }

    public function getAllCategories() {
        return $this->model->getAllCategories();
    }

    public function getAllBrands() {
        return $this->model->getAllBrands();
    }

    public function getAllSizes() {
        return $this->model->getAllSizes();
    }
}

?>
