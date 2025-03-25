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

    // Get ID from URL
    $category->id = isset($_GET['id']) ? $_GET['id'] : die();

    // Get category
    $success = $category->read_single();

    if($success) {
        // Create array
        $category_arr = array(
            'id' => $category->id,
            'category' => $category->category
        );

        // Make JSON
        echo json_encode($category_arr);
    } else {
        echo json_encode(
            array('message' => 'Category Not Found')
        );
    }
?>