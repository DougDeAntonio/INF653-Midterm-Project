<?php
    
    include_once '../config/Database.php';
    include_once '../models/Category.php';

    $database = new Database();
    $db = $database->connect();

    $category = new Category($db);

    $category->id = isset($_GET['id']) ? $_GET['id'] : die();

    $success = $category->read_single();

    if($success) {
        $category_arr = array(
            'id' => $category->id,
            'category' => $category->category
        );

        echo json_encode($category_arr);
    } else {
        echo json_encode(
            array('message' => 'Category Not Found')
        );
    }
?>