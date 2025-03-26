<?php
    
    include_once '../config/Database.php';
    include_once '../models/Quote.php';

    $database = new Database();
    $db = $database->connect();

    $quote = new Quote($db);

    $data = json_decode(file_get_contents("php://input"));

    if(!empty($data->id) && !empty($data->quote) && !empty($data->author_id) && !empty($data->category_id)) {
        $quote->id = $data->id;
        $quote->quote = $data->quote;
        $quote->author_id = $data->author_id;
        $quote->category_id = $data->category_id;

        if($quote->update()) {
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