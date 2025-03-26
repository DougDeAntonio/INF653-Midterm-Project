<?php
    
    include_once '../config/Database.php';
    include_once '../models/Quote.php';

    $database = new Database();
    $db = $database->connect();

    $quote = new Quote($db);

    $quote->id = isset($_GET['id']) ? $_GET['id'] : die();

    $success = $quote->read_single();

    if($success) {
        $quote_arr = array(
            'id' => $quote->id,
            'quote' => $quote->quote,
            'author' => $quote->author,
            'category' => $quote->category,
            'author_id' => $quote->author_id,
            'category_id' => $quote->category_id
        );

        echo json_encode($quote_arr);
    } else {
        echo json_encode(
            array('message' => 'Quote Not Found')
        );
    }
?>