<?php

class ToySizeModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertSize($size) {
        $query = "INSERT INTO petToySize (size) VALUES ('$size')";
        return mysqli_query($this->db, $query);
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

    public function deleteSize($sizeID) {
        $query = "DELETE FROM petToySize WHERE sizeID = $sizeID";
        return mysqli_query($this->db, $query);
    }
}
?>
