<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'OPTIONS') {
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('Access-Control-Allow-Headers: Origin, Accept, Content-Type, X-Requested-With');
    exit();
}

require_once '../../config/Database.php';
require_once '../../models/Author.php';

$database = new Database();
$db = $database->connect();

$author = new Author($db);

switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            require_once 'read_single.php';
        } else {
            require_once 'read.php';
        }
        break;
    case 'POST':
        require_once 'create.php';
        break;
    case 'PUT':
        require_once 'update.php';
        break;
    case 'DELETE':
        require_once 'delete.php';
        break;
    default:
        http_response_code(405);
        echo json_encode(['message' => 'Method Not Allowed']);
        break;
}
?>
