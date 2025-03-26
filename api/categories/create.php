<?php
    
    include_once '../config/Database.php';
    include_once '../models/Category.php';

    $database = new Database();
    $db = $database->connect();

    $category = new Category($db);

    $data = json_decode(file_get_contents("php://input"));

    if(!empty($data->category)) {
        $category->category = $data->category;

        if($category->create()) {
            http_response_code(201);
            echo json_encode(
                array(
                    'id' => $category->id,
                    'category' => $category->category
                )
            );
        } else {
            http_response_code(500);
            echo json_encode(
                array('message' => 'Unable to create category')
            );
        }
    } else {
        http_response_code(400);
        echo json_encode(
            array('message' => 'Unable to create category. Data is incomplete.')
        );
    }
