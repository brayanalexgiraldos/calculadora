<?php
require_once 'controllers/CalculatorController.php';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = new CalculatorController();
switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'calculate':
        $controller->calculate();
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
?>