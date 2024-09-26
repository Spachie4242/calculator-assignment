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