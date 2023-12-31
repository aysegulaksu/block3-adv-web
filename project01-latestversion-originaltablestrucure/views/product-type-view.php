<?php
class ProductTypeView {
    public function displayTypes($types) {
        echo "<main>";

        // Display form
        $this->displayTypeForm();

        // Display types
        echo "<h2>Product Types</h2>";
        echo "<ul class='types-list'>";
        foreach ($types as $type) {
            $typeID = $type['typeID'];
            echo "<li class='type-item'>{$type['type']} ";
            echo "[<a href='views/delete-type.php?id=$typeID'>Delete</a>]</li>";
        }
        echo "</ul>";

        echo "</main>";
    }

    public function displayTypeForm() {
        echo "
            <h2>Add New Type</h2>
            <div class='form-wrap1'>
                <form class='form1' method='post' action='product-type.php'>
                    <label class='form-label' for='newType'>Type:</label>
                    <input class='form-input' id='newType' type='text' name='newType' required>
                    <button type='submit'>Add Type</button>
                </form>
            </div>
        ";
    }
}
?>


