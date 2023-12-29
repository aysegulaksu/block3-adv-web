<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 01: Product Category</title>
    <link rel="stylesheet" href="./style.css">
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
                    <a href="./product-category.php" target="_blank">
                       Category
                    </a>
                </li>
                <li>
                    <a href="./brand.php" target="_blank">
                        Brand
                    </a>
                </li>
                <li>
                    <a href="./toy-size.php" target="_blank">
                        Toy Size
                    </a>
                </li>
                <li>
                    <a href="./pet-toy.php" target="_blank">
                        Pet Toys
                    </a>
                </li>

            </ul>
        </nav>
    </header>
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
                    echo "<p style='color: red;'>Category already exists. Please choose a different category.</p>";
                }
            }
        }

        // Display categories and  form
        $categories = $controller->getAllCategories();
        $view->displayCategories($categories);
    ?>

    </main>
</body>
</html>

