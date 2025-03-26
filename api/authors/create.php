<?php
    
    include_once '../config/Database.php';
    include_once '../models/Author.php';

    $database = new Database();
    $db = $database->connect();

    $author = new Author($db);

    $data = json_decode(file_get_contents("php://input"));

    if(!empty($data->author)) {
        $author->author = $data->author;

        if($author->create()) {
            http_response_code(201);
            echo json_encode(
                array(
                    'id' => $author->id,
                    'author' => $author->author
                )
            );
        } else {
            http_response_code(500);
            echo json_encode(
                array('message' => 'Unable to create author')
            );
        }
    } else {
        http_response_code(400);
        echo json_encode(
            array('message' => 'Unable to create author. Data is incomplete.')
        );
    }

?>
