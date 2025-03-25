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

    // Check if id is not empty
    if(!empty($data->id)) {
        // Set ID to delete
        $quote->id = $data->id;

        // Delete quote
        if($quote->delete()) {
            echo json_encode(
                array('id' => $quote->id)
            );
        } else {
            echo json_encode(
                array('message' => 'Quote not deleted')
            );
        }
    } else {
        echo json_encode(
            array('message' => 'Missing Required Parameters')
        );
    }
?>