<?php
    
    include_once '../config/Database.php';
    include_once '../models/Quote.php';

    $database = new Database();
    $db = $database->connect();

    $quote = new Quote($db);

    $data = json_decode(file_get_contents("php://input"));

    if(!empty($data->id)) {
        $quote->id = $data->id;

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