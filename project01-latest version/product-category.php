<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 01: Product Category</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
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

        require_once 'connect/dbconnect.php';
        require_once 'models/product-category-model.php';
        require_once 'controllers/product-category-controller.php';
        require_once 'views/product-category-view.php';

        $model = new ProductCategoryModel($link);
        $controller = new ProductCategoryController($model);
        $view = new ProductCategoryView();

        // Form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newCategory = isset($_POST['newCategory']) ? $_POST['newCategory'] : '';

            if (!empty($newCategory)) {
                $result = $controller->insertCategory($newCategory);

                if (!$result) {
                    echo "<h3>Category already exists. Please choose a different category.</h3>";
                }
            }
        }

        // Display categories and form
        $categories = $controller->getAllCategories();
        $view->displayCategories($categories);
        ?>

    </main>
</body>
</html>

