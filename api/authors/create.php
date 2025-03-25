<?php
    // Headers are already set in index.php
    
    // Include database and object files
    include_once '../config/Database.php';
    include_once '../models/Author.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate author object
    $author = new Author($db);

    // Get raw posted data
    $data = json_decode(file_get_contents("php://input"));

    // Check if data is not empty
    if(!empty($data->author)) {
        // Set author property values
        $author->author = $data->author;

        // Create author
        if($author->create()) {
            // Set response code - 201 created
            http_response_code(201);
            echo json_encode(
                array(
                    'id' => $author->id,
                    'author' => $author->author
                )
            );
        } else {
            // Set response code - 500 internal server error
            http_response_code(500);
            echo json_encode(
                array('message' => 'Unable to create author')
            );
        }
    } else {
        // Set response code - 400 bad request
        http_response_code(400);
        echo json_encode(
            array('message' => 'Unable to create author. Data is incomplete.')
        );
    }

?>
