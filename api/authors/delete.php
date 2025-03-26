<?php
    
    include_once '../config/Database.php';
    include_once '../models/Author.php';

    $database = new Database();
    $db = $database->connect();

    $author = new Author($db);

    $data = json_decode(file_get_contents("php://input"));

    if(!empty($data->id)) {
        $author->id = $data->id;

        if($author->delete()) {
            echo json_encode(
                array('id' => $author->id)
            );
        } else {
            echo json_encode(
                array('message' => 'Author not deleted')
            );
        }
    } else {
        echo json_encode(
            array('message' => 'Missing Required Parameters')
        );
    }

?>
