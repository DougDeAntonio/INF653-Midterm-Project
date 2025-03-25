<?php
    // Headers are already set in index.php
    
    // Include database and object files
    include_once '../config/Database.php';
    include_once '../models/Category.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate category object
    $category = new Category($db);

    // Get raw posted data
    $data = json_decode(file_get_contents("php://input"));

    // Check if id is not empty
    if(!empty($data->id)) {
        // Set ID to delete
        $category->id = $data->id;

        // Delete category
        if($category->delete()) {
            echo json_encode(
                array('id' => $category->id)
            );
        } else {
            echo json_encode(
                array('message' => 'Category not deleted')
            );
        }
    } else {
        echo json_encode(
            array('message' => 'Missing Required Parameters')
        );
    }
?>