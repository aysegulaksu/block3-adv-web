<?php

class ProductTypeModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertType($type) {
        $query = "INSERT INTO productType (`type`) VALUES ('$type')";
        return mysqli_query($this->db, $query);
    }

    public function getAllTypes() {
        $query = "SELECT * FROM productType ORDER BY `type` ASC";
        $result = mysqli_query($this->db, $query);

        $types = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $types[] = $row;
        }

        return $types;
    }

    public function deleteType($typeID) {
        $query = "DELETE FROM productType WHERE typeID = $typeID";
        return mysqli_query($this->db, $query);
    }
}
