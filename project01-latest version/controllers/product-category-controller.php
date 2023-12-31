<?php

class ProductCategoryController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function insertCategory($category) {
        // Check if the category already exists
        $existingCategories = $this->model->getAllCategories();
        foreach ($existingCategories as $existingCategory) {
            if (strcasecmp($existingCategory['category'], $category) === 0) {
                return false; // Category already exists, do not insert
            }
        }

        // Category does not exist, insert category.
        return $this->model->insertCategory($category);
    }

    public function getAllCategories() {
        return $this->model->getAllCategories();
    }

    public function deleteCategory($categoryID) {
        return $this->model->deleteCategory($categoryID);
    }
}
?>
