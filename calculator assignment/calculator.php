<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multipurpose Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="number"], select {
            padding: 10px;
            font-size: 16px;
            margin: 5px 0;
            width: 100%;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            width: 100%;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2>Multipurpose Calculator</h2>
    <form method="POST" action="">
        <label>Enter First Number:</label>
        <input type="number" name="num1" step="any" required>

        <label>Select Operation:</label>
        <select name="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
            <option value="power">Exponentiation (^)</option>
            <option value="sqrt">Square Root</option>
            <option value="log">Logarithm (log)</option>
        </select>

        <label>Enter Second Number (if required):</label>
        <input type="number" name="num2" step="any">

        <button type="submit" name="submit">Calculate</button>
    </form>

    <h3>Result:</h3>
    <p>
        <?php
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $operation = $_POST['operation'];
            $result = '';

            if (!empty($_POST['num2'])) {
                $num2 = $_POST['num2'];
            }

            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 == 0) {
                        $result = "Error: Division by zero!";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                case 'power':
                    $result = pow($num1, $num2);
                    break;
                case 'sqrt':
                    if ($num1 < 0) {
                        $result = "Error: Cannot calculate square root of negative number!";
                    } else {
                        $result = sqrt($num1);
                    }
                    break;
                case 'log':
                    if ($num1 <= 0) {
                        $result = "Error: Logarithm input must be greater than zero!";
                    } else {
                        $result = log($num1);
                    }
                    break;
                default:
                    $result = "Invalid operation.";
            }
            echo $result;
        }
        ?>
    </p>
</div>

</body>
</html>
