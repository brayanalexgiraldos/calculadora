<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack PHP Technical Test</title>
    <link rel="stylesheet" href="views/calculator/css/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
       
    </style>
</head>
<body>
    <div class="container">
        <div class="calculator-container">
            <h1 class="text-center">Full Stack PHP Technical Test</h1>
            
            <form id="calculatorForm">
                <div class="form-group">
                    <label for="num1">Number 1:</label>
                    <input type="text" class="form-control" id="num1" name="num1" required step="0.01" pattern="[0-9]+(\.[0-9]+)?" title="Please enter only numbers with an optional decimal point">
                </div>
                <div class="form-group">
                    <label for="num2">Number 2:</label>
                    <input type="text" class="form-control" id="num2" name="num2" required step="0.01" pattern="[0-9]+(\.[0-9]+)?" title="Please enter only numbers with an optional decimal point">
                </div>
                <div class="form-group">
                    <label for="operation">Operation:</label>
                    <select class="form-control" id="operation" name="operation">
                        <option value="add">Add</option>
                        <option value="subtract">Subtract</option>
                        <option value="multiply">Multiply</option>
                        <option value="divide">Divide</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block position-relative">
                    <span class="loader"></span> <!-- Loader dentro del botón -->
                    <span class="ml-2">Calculate</span>
                </button>
                <!-- Result or Error Container -->
                <div id="resultOrErrorContainer" class="result text-center" style="display: none;">
                    <h2><span id="resultOrErrorValue"></span></h2>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="views/calculator/js/calculatorScript.js"></script>
</body>
</html>