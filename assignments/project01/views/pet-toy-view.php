<?php

class PetToyView {
    public function displayPetToys($petToys, $categories, $brands, $sizes) {
     
        echo "<div class='table-wrap'>";
    
        // Display the form
        $this->displayPetToyForm($categories, $brands, $sizes);
    
        // Display pet toys 
        echo "<h2>Pet Toys</h2>";
        
        echo "<table class='pet-toy-table'>";
        echo "<tr>
                <th>Category</th>
                <th>Brand</th>
                <th>Toy Name</th>
                <th>Size</th>
                <th>Action</th>
              </tr>";
        foreach ($petToys as $petToy) {
            echo "<tr>
                    <td>{$petToy['category']}</td>
                    <td>{$petToy['brand']}</td>
                    <td>{$petToy['toyName']}</td>
                    <td>{$petToy['size']}</td>
                    <td>[<a href='./pet-toy.php?action=delete&id={$petToy['petToyID']}'>Delete</a>]</td>
                  </tr>";
        }
        echo "</table>";
        echo "</div>";
    
       
    }
    public function displayPetToyForm($categories, $brands, $sizes) {
        
        echo "
            <div class='form-wrap'>
            <h2>Add New Pet Toy</h2>
            <form class='form-2' method='post' action='pet-toy.php'>
            
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
                    <label class='form-label' for='toyName'>Toy Name</label>
                    <input class='form-input' id='toyName' type='text' name='toyName' placeholder='Enter toy name' required>
                </div>";
        
        echo "
                <div class='form-group'>
                    <label class='form-label' for='sizeID'>Size</label>
                    <select class='form-input' id='sizeID' name='sizeID' required>
                        <option value='' disabled selected>Select Size</option>";
                        foreach ($sizes as $size) {
                            echo "<option value='{$size['sizeID']}'>{$size['size']}</option>";
                        }
        echo "
                    </select>
                </div>";
        
        echo "
                <button type='submit'>Add Pet Toy</button>
            </form>
        ";
        echo "</div>";
        
    }
    
}

?>
