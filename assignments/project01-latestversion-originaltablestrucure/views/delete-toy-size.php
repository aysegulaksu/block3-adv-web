<?php
        require_once '../connect/dbconnect.php';
        require_once '../models/toy-size-model.php';
        require_once '../controllers/toy-size-controller.php';

        $model = new ToySizeModel($link);
        $controller = new ToySizeController($model);

        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
            $sizeID = $_GET['id'];

            $result = $controller->deleteSize($sizeID);

            if ($result) {
                echo "Size with ID $sizeID deleted successfully.";
                header("Location: ../toy-size.php"); // Redirect to toy-size.php
                exit();
            } else {
                echo "Failed to delete size with ID $sizeID. Reason: You cannot delete this size because there are products associated with it. Please delete the associated products first.";
            }
        } else {
            echo "Invalid request.";
        }
    ?>