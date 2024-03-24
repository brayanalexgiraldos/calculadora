<?php
require_once 'models/CalculatorModel.php';

class CalculatorController {
    private $model;

    public function __construct() {
        $this->model = new CalculatorModel();
    }

    public function index() {
        require_once 'views/calculator/calculatorView.php';
    }

    public function calculate() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num1 = isset($_POST['num1']) ? $_POST['num1'] : null;
            $num2 = isset($_POST['num2']) ? $_POST['num2'] : null;
            $operation = isset($_POST['operation']) ? $_POST['operation'] : null;

            if ($num1 === null || $num2 === null || $operation === null) {
                echo 'Please enter all fields.';
                return;
            }

            $result = $this->model->performCalculation($num1, $num2, $operation);
            $formattedResult = is_int($result) ? $result : number_format($result, 2);
            if ($result === false) {
                echo 'Error: Invalid operation.';
                return;
            }

            echo json_encode(['result' => $formattedResult]);
        }
    }
}
?>