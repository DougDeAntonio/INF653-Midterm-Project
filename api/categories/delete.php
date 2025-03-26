<?php
    
    include_once '../config/Database.php';
    include_once '../models/Category.php';

    $database = new Database();
    $db = $database->connect();

    $category = new Category($db);

    $data = json_decode(file_get_contents("php://input"));

    if(!empty($data->id)) {
        $category->id = $data->id;

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