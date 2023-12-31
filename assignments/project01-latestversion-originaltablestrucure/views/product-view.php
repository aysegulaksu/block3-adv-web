<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class ProductView {
    public function displayProducts($products, $categories, $brands, $types) {
     
        echo "<div class='list-wrap'>";
    
        // Display the form
        $this->displayProductForm($categories, $brands, $types);
    
        // Display products
        echo "<h2>Products</h2>";
        echo "<ul class='product-list'>";
        foreach ($products as $product) {
            echo "<li>{$product['productName']} - {$product['type']} - {$product['category']} - {$product['brand']} [<a href='./product.php?action=delete&id={$product['productID']}'>Delete</a>]</li>";
        }
        echo "</ul>";
        echo "</div>";
    }

    public function displayProductForm($categories, $brands, $types) {
        
        echo "
            <div class='form-wrap'>
            <h2>Add New Product</h2>
            <form class='form-2' method='post' action='./product.php'>
            
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
                
        // Add Type dropdown
        echo "
                <div class='form-group'>
                    <label class='form-label' for='typeID'>Type </label>
                    <select class='form-input' id='typeID' name='typeID' required>
                        <option value='' disabled selected>Select Type</option>";
                        foreach ($types as $type) {
                            echo "<option value='{$type['typeID']}'>{$type['type']}</option>";
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
                    <label class='form-label' for='productName'>Product Name</label>
                    <input class='form-input' id='productName' type='text' name='productName' placeholder='Enter product name' required>
                </div>";

        echo "
                <button type='submit'>Add Product</button>
            </form>
        ";
        echo "</div>";
    }
}
?>
