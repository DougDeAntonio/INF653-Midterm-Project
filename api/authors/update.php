<?php
    
    include_once '../config/Database.php';
    include_once '../models/Author.php';

    $database = new Database();
    $db = $database->connect();

    $author = new Author($db);

    $data = json_decode(file_get_contents("php://input"));

    if(!empty($data->id) && !empty($data->author)) {
        $author->id = $data->id;
        $author->author = $data->author;

        if($author->update()) {
            echo json_encode(
                array(
                    'id' => $author->id,
                    'author' => $author->author
                )
            );
        } else {
            echo json_encode(
                array('message' => 'Author not updated')
            );
        }
    } else {
        echo json_encode(
            array('message' => 'Missing Required Parameters')
        );
    }

?>
