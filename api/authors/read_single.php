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

    // Get ID from URL
    $author->id = isset($_GET['id']) ? $_GET['id'] : die();

    // Get author
    $success = $author->read_single();

    if($success) {
        // Create array
        $author_arr = array(
            'id' => $author->id,
            'author' => $author->author
        );

        // Make JSON
        echo json_encode($author_arr);
    } else {
        echo json_encode(
            array('message' => 'Author Not Found')
        );
    }
?>