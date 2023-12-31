<?php

class ProductCategoryModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertCategory($category) {
        $query = "INSERT INTO productCategory (`category`) VALUES ('$category')";
        return mysqli_query($this->db, $query);
    }

    public function getAllCategories() {
        $query = "SELECT * FROM productCategory ORDER BY `category` ASC";
        $result = mysqli_query($this->db, $query);

        $categories = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }

        return $categories;
    }

    public function deleteCategory($categoryID) {
        $query = "DELETE FROM productCategory WHERE categoryID = $categoryID";
        return mysqli_query($this->db, $query);
    }
}
?>
