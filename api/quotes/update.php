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

    // Get raw PUT data
    $data = json_decode(file_get_contents("php://input"));

    // Make sure required fields are not empty
    if(!empty($data->id) && !empty($data->quote) && !empty($data->author_id) && !empty($data->category_id)) {
        // Set ID to update
        $quote->id = $data->id;
        $quote->quote = $data->quote;
        $quote->author_id = $data->author_id;
        $quote->category_id = $data->category_id;

        // Update quote
        if($quote->update()) {
            // Get author and category details to include in response
            $quote->read_single();
            
            echo json_encode(
                array(
                    'id' => $quote->id,
                    'quote' => $quote->quote,
                    'author_id' => $quote->author_id,
                    'category_id' => $quote->category_id,
                    'author' => $quote->author,
                    'category' => $quote->category
                )
            );
        } else {
            echo json_encode(
                array('message' => 'Quote not updated')
            );
        }
    } else {
        echo json_encode(
            array('message' => 'Missing Required Parameters')
        );
    }
?>