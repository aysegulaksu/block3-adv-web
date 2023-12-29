<?php

class ToySizeController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function insertSize($size) {
        // Check if the size already exists
        $existingSizes = $this->model->getAllSizes();
        foreach ($existingSizes as $existingSize) {
            if (strcasecmp($existingSize['size'], $size) === 0) {
                return false; // Size already exists, do not insert
            }
        }

        // Size does not exist, insert size
        return $this->model->insertSize($size);
    }

    public function getAllSizes() {
        return $this->model->getAllSizes();
    }

    public function deleteSize($sizeID) {
        return $this->model->deleteSize($sizeID);
    }
}
?>
