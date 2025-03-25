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

    // Get raw posted data
    $data = json_decode(file_get_contents("php://input"));

    // Check if data is not empty
    if(!empty($data->quote) && !empty($data->author_id) && !empty($data->category_id)) {
        // Set quote property values
        $quote->quote = $data->quote;
        $quote->author_id = $data->author_id;
        $quote->category_id = $data->category_id;

        // Create quote
        if($quote->create()) {
            // Set response code - 201 created
            http_response_code(201);
            
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
            // Set response code - 500 internal server error
            http_response_code(500);
            echo json_encode(
                array('message' => 'Unable to create quote')
            );
        }
    } else {
        // Set response code - 400 bad request
        http_response_code(400);
        echo json_encode(
            array('message' => 'Unable to create quote. Data is incomplete.')
        );
    }
?>