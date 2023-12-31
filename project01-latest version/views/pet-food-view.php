<?php
error_reporting(E_ALL); ini_set('display_errors', 1);

class PetFoodView {
    public function displayPetFoods($petFoods, $categories, $brands, $expirationDates) {
     
        echo "<div class='table-wrap'>";
    
        // Display the form
        $this->displayPetFoodForm($categories, $brands);
    
        // Display pet food
        echo "<h2>Pet Food</h2>";
        
        echo "<table class='pet-table'>";
        echo "<tr>
                <th>Category</th>
                <th>Brand</th>
                <th>Food Name</th>
                <th>Exp. Date</th>
                <th>Action</th>
              </tr>";
        foreach ($petFoods as $petFood) {
            echo "<tr>
                    <td>{$petFood['category']}</td>
                    <td>{$petFood['brand']}</td>
                    <td>{$petFood['FoodName']}</td>
                    <td>{$petFood['expDate']}</td>
                    <td>[<a href='./pet-food.php?action=delete&id={$petFood['petFoodID']}'>Delete</a>]</td>
                  </tr>";
        }
        echo "</table>";
        echo "</div>";
    }

    public function displayPetFoodForm($categories, $brands) {
        
        echo "
            <div class='form-wrap'>
            <h2>Add New Pet Food</h2>
            <form class='form-2' method='post' action='./pet-food.php'>
            
                <div class='form-group'>
                    <label class='form-label' for='categoryID'>Category </label>
                    <select class='form-input' id='categoryID' name='categoryID' required>
                        <option value='' disabled selected>Select Category </option>";
                        foreach ($categories as $category) {
                            echo "<option value='{$category['categoryID']}'>{$category['category']}</option>";
                        }
        echo "
                    </select>
                </div>";
                echo "
                <div class='form-group'>
                    <label class='form-label' for='brandID'>Brand </label>
                    <select class='form-input' id='brandID' name='brandID' required>
                        <option value='' disabled selected>Select Brand</option>";
                        foreach ($brands as $brand) {
                            echo "<option value='{$brand['brandID']}'>{$brand['brand']}</option>";
                        }
            echo "
                    </select>
                </div>";

echo "
        <div class='form-group'>
            <label class='form-label' for='foodName'>Food Name</label>
            <input class='form-input' id='foodName' type='text' name='foodName' placeholder='Enter food name' required>
        </div>";

echo "
        <div class='form-group'>
            <label class='form-label' for='expirationDate'>Expiration Date</label>
            <input class='form-input' id='expirationDate' type='date' name='expirationDate' required>
        </div>";

echo "
        <button type='submit'>Add Pet Food</button>
    </form>
";
echo "</div>";
}
}
?>
