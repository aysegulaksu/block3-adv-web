<?php

class ProductTypeController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function insertType($type) {
        // Check if type already exists
        $existingTypes = $this->model->getAllTypes();
        foreach ($existingTypes as $existingType) {
            if (strcasecmp($existingType['type'], $type) === 0) {
                return false; // Type already exists, do not insert
            }
        }

        // Type does not exist, insert
        return $this->model->insertType($type);
    }

    public function getAllTypes() {
        return $this->model->getAllTypes();
    }

    public function deleteType($typeID) {
        return $this->model->deleteType($typeID);
    }
}
