<?php
class CalculatorModel {
    private $api_url;
    public function __construct() {
        // Define la URL base de la API
        $this->api_url = 'http://ec2-52-67-109-236.sa-east-1.compute.amazonaws.com/api/apiCalculator.php';
    }

    public function performCalculation($num1, $num2, $operation) {
        $postData = array(
            'num1' => $num1,
            'num2' => $num2,
            'operation' => $operation
        );
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->api_url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        $response = curl_exec($curl);
        if ($response === false) {
            return false;
        }
        $responseData = json_decode($response, true);
        if ($responseData && isset($responseData['result'])) {
            return $responseData['result'];
        } else {
            return false;
        }
    }
}
?>