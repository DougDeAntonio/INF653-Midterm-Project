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

    // Check if id is not empty
    if(!empty($data->id)) {
        // Set ID to delete
        $author->id = $data->id;

        // Delete author
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
