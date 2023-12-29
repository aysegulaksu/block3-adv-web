<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main >
    <?php

        class ProductBrandView {
            public function displayBrands($brands) {
                echo "<main>";

                // Display the form 
                $this->displayBrandForm();

                // Display brands 
                echo "<h2>Product Brands</h2>";
                echo "<ul class='brands-list'>";
                foreach ($brands as $brand) {
                    echo "<li class='brand-item'>{$brand['brand']} ";
                    echo "[<a href='brand.php?action=delete&id={$brand['brandID']}'>Delete</a>]</li>";
                }
                echo "</ul>";

                echo "</main>";
            }

            public function displayBrandForm() {
                echo "
                    <h2>Add New Brand</h2>
                    <form method='post' action='brand.php'>
                        <label class='form-label' for='newBrand'>Brand:</label>
                        <input class='form-input' id='newBrand' type='text' name='newBrand' required>
                        <button type='submit'>Add Brand</button>
                    </form>
                ";
            }
        }
    ?>
    
</main>

</body>
</html>
