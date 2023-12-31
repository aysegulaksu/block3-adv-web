<?php

class ToySizeView {
    public function displaySizes($sizes) {
        echo "<main>";

        // Display form
        $this->displaySizeForm();

        // Display sizes
        echo "<h2>Toy Sizes</h2>";
        echo "<ul class='list'>";
        foreach ($sizes as $size) {
            echo "<li class='size-item'>{$size['size']} ";
            echo "[<a href='./views/delete-toy-size.php?id={$size['sizeID']}'>Delete</a>]</li>";
        }
        echo "</ul>";

        echo "</main>";
    }

    public function displaySizeForm() {
        echo "
            <h2>Add New Size</h2>
            <div class='form-wrap1'>
            <form class='form-1' method='post' action='toy-size.php'>
                <label class='form-label' for='newSize'>Size</label>
                <input class='form-input' id='newSize' type='text' name='newSize' required>
                <button type='submit'>Add Size</button>
            </form>
            </div>
        ";
    }
}
?>
