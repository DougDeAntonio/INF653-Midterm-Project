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

    // Get raw PUT data
    $data = json_decode(file_get_contents("php://input"));

    // Make sure id and author fields are not empty
    if(!empty($data->id) && !empty($data->author)) {
        // Set ID to update
        $author->id = $data->id;
        $author->author = $data->author;

        // Update author
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
