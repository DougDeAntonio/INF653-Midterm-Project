<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'OPTIONS') {
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
        header('Access-Control-Allow-Headers: Origin, Accept, Content-Type, X-Requested-With');
        exit();
    }

    // Route to the appropriate file based on HTTP method
    switch($method) {
        case 'GET':
            if(isset($_GET['id'])) {
                require 'read_single.php';
            } else {
                require 'read.php';
            }
            break;
        case 'POST':
            require 'create.php';
            break;
        case 'PUT':
            require 'update.php';
            break;
        case 'DELETE':
            require 'delete.php';
            break;
        default:
            // Invalid request method
            header("HTTP/1.1 405 Method Not Allowed");
            echo json_encode(array('message' => 'Method Not Allowed'));
            break;
    }
?>