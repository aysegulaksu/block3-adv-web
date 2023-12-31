<?php

class PetToyModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addPetToy($categoryID, $brandID, $toyName, $sizeID) {
        $query = "INSERT INTO petToy (categoryID, brandID, toyName, sizeID) 
                  VALUES ('$categoryID', '$brandID', '$toyName', '$sizeID')";

        return mysqli_query($this->db, $query);
    }

    public function getAllPetToys() {
        $query = "SELECT pt.petToyID, pc.category, pb.brand, pt.toyName, pts.size
                  FROM petToy pt
                  INNER JOIN productCategory pc ON pt.categoryID = pc.categoryID
                  INNER JOIN productBrand pb ON pt.brandID = pb.brandID
                  INNER JOIN petToySize pts ON pt.sizeID = pts.sizeID";

        $result = mysqli_query($this->db, $query);

        $petToys = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $petToys[] = $row;
        }

        return $petToys;
    }

    public function deletePetToy($petToyID) {
        $query = "DELETE FROM petToy WHERE petToyID = $petToyID";
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

    public function getAllSizes() {
        $query = "SELECT * FROM petToySize";
        $result = mysqli_query($this->db, $query);

        $sizes = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $sizes[] = $row;
        }

        return $sizes;
    }
}

?>
