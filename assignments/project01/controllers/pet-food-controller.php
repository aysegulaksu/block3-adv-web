<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class PetFoodController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function addPetFood($categoryID, $brandID, $foodName, $expirationDate) {
        // Validate input 
        return $this->model->addPetFood($categoryID, $brandID, $foodName, $expirationDate);
    }

    public function getAllPetFoods() {
        return $this->model->getAllPetFoods();
    }

    public function deletePetFood($petFoodID) {
        return $this->model->deletePetFood($petFoodID);
    }

    public function getAllCategories() {
        return $this->model->getAllCategories();
    }

    public function getAllBrands() {
        return $this->model->getAllBrands();
    }
}

?>

