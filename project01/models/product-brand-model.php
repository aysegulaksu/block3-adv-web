<?php

class ProductBrandModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertBrand($brand) {
        $query = "INSERT INTO productBrand (brand) VALUES ('$brand')";
        return mysqli_query($this->db, $query);
    }

    public function getAllBrands() {
        $query = "SELECT * FROM productBrand";
        $result = mysqli_query($this->db, $query);

        $brands = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $brands[] = $row;
        }

        return $brands;
    }
}
?>
