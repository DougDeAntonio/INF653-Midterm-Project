<?php
    // Headers are already set in index.php
    
    // Include database and object files
    include_once '../config/Database.php';
    include_once '../models/Quote.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate quote object
    $quote = new Quote($db);

    // Get ID from URL
    $quote->id = isset($_GET['id']) ? $_GET['id'] : die();

    // Get quote
    $success = $quote->read_single();

    if($success) {
        // Create array
        $quote_arr = array(
            'id' => $quote->id,
            'quote' => $quote->quote,
            'author' => $quote->author,
            'category' => $quote->category,
            'author_id' => $quote->author_id,
            'category_id' => $quote->category_id
        );

        // Make JSON
        echo json_encode($quote_arr);
    } else {
        echo json_encode(
            array('message' => 'Quote Not Found')
        );
    }
?>