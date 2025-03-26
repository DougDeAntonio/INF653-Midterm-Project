<?php
    
    include_once '../config/Database.php';
    include_once '../models/Category.php';

    $database = new Database();
    $db = $database->connect();

    $category = new Category($db);

    $data = json_decode(file_get_contents("php://input"));

    if(!empty($data->id) && !empty($data->category)) {
        $category->id = $data->id;
        $category->category = $data->category;

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