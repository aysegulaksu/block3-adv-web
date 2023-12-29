<?php

class ProductCategoryView {
    public function displayCategories($categories) {
        echo "<main>";

        // Display form 
        $this->displayCategoryForm();

        // Display categories 
        echo "<h2>Product Categories</h2>";
        echo "<ul class='categories-list'>";
        foreach ($categories as $category) {
            $categoryID = $category['categoryID'];
            echo "<li class='category-item'>{$category['category']} ";
            echo "[<a href='./views/delete-category.php?id=$categoryID'>Delete</a>]</li>";
        }
        echo "</ul>";

        echo "</main>";
    }

    public function displayCategoryForm() {
        echo "
            <h2>Add New Category</h2>
            <form method='post' action='product-category.php'>
                <label class='form-label' for='newCategory'>Category:</label>
                <input class='form-input' id='newCategory' type='text' name='newCategory' required>
                <button type='submit'>Add Category</button>
            </form>
        ";
    }
}
?>
