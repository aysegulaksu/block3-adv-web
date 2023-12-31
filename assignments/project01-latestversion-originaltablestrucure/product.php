<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project:01: Product</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
<header>
        <nav>
            <ul>
                <li class="logo">
                    <figure>
                        <img src="https://cdn.pixabay.com/photo/2016/04/12/19/32/abstract-1325156_1280.png" alt="">
                        <figcaption>
                            <h1>PET PRODUCTS</h1>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <a href="./index.php">
                        Home
                    </a>
                </li>
                <li>
                    <a href="./product-type.php">
                       Type
                    </a>
                </li>
                <li>
                    <a href="./product-category.php">
                       Category
                    </a>
                </li>
                <li>
                    <a href="./brand.php">
                        Brand
                    </a>
                </li>
                <li>
                    <a href="./product.php">
                        Product
                    </a>
                </li>
            </ul>
        </nav>
    </header>
<!-- end of header -->

    <main>
        <?php

        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        require_once 'connect/dbconnect.php';
        require_once 'models/product-model.php';
        require_once 'controllers/product-controller.php';
        require_once 'views/product-view.php';

        $model = new ProductModel($link);
        $controller = new ProductController($model);
        $view = new ProductView();

        // Form post submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $categoryID = isset($_POST['categoryID']) ? $_POST['categoryID'] : '';
            $brandID = isset($_POST['brandID']) ? $_POST['brandID'] : '';
            $productName = isset($_POST['productName']) ? $_POST['productName'] : '';
            $typeID = isset($_POST['typeID']) ? $_POST['typeID'] : '';

            // Validate input
            $result = $controller->addProduct($categoryID, $brandID, $productName, $typeID);

            if ($result) {
                echo "<h4 class='success'>Product added successfully!</h4>";
            } else {
                echo "<h3 class='error'>Failed to add product. Please check your input.</h3>";
            }
        }

        // Delete action
        if (isset($_GET['action']) && $_GET['action'] === 'delete') {
            $productID = isset($_GET['id']) ? $_GET['id'] : null;

            if ($productID !== null) {
                $result = $controller->deleteProduct($productID);

                if ($result) {
                    echo "<h4 class='success'>Product with ID $productID deleted successfully.</h4>";
                } else {
                    echo "<h3 class='error'>Failed to delete product with ID $productID.</h3>";
                }
            }
        }

        // Display products and the form
        $products = $controller->getAllProducts();
        $categories = $controller->getAllCategories();
        $brands = $controller->getAllBrands();
        $types = $controller->getAllTypes();
        $view->displayProducts($products, $categories, $brands, $types);
        ?>
    </main>
</body>

</html>




