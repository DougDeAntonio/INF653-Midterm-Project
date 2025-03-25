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

    // Get raw PUT data
    $data = json_decode(file_get_contents("php://input"));

    // Make sure id and category fields are not empty
    if(!empty($data->id) && !empty($data->category)) {
        // Set ID to update
        $category->id = $data->id;
        $category->category = $data->category;

        // Update category
        if($category->update()) {
            echo json_encode(
                array(
                    'id' => $category->id,
                    'category' => $category->category
                )
            );
        } else {
            echo json_encode(
                array('message' => 'Category not updated')
            );
        }
    } else {
        echo json_encode(
            array('message' => 'Missing Required Parameters')
        );
    }
?>