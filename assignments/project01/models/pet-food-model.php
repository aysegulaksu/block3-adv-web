<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
class PetFoodModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addPetFood($categoryID, $brandID, $foodName, $expirationDate) {
        $query = "INSERT INTO petFood (categoryID, brandID, FoodName, expDate) 
                  VALUES ('$categoryID', '$brandID', '$foodName', '$expirationDate')";

        return mysqli_query($this->db, $query);
    }

    public function getAllPetFoods() {
        $query = "SELECT pf.petFoodID, pc.category, pb.brand, pf.FoodName, pf.expDate
                  FROM petFood pf
                  INNER JOIN productCategory pc ON pf.categoryID = pc.categoryID
                  INNER JOIN productBrand pb ON pf.brandID = pb.brandID";

        $result = mysqli_query($this->db, $query);

        $petFoods = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $petFoods[] = $row;
        }

        return $petFoods;
    }

    public function deletePetFood($petFoodID) {
        $query = "DELETE FROM petFood WHERE petFoodID = $petFoodID";
        return mysqli_query($this->db, $query);
    }

    public function getAllCategories() {
        $query = "SELECT * FROM productCategory";
        $result = mysqli_query($this->db, $query);

        $categories = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }

        return $categories;
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
