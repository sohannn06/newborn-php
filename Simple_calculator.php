
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #DC143C; 
        }

        .container {
            background-color: #fff; 
            padding: 40px;
            border-radius: 50px;
            box-shadow: 0 0 60px #A52A2A;
        }

        h2 {
            text-align: center;
        }

        form {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Simple Calculator</h2>
        <form method="post" action="simple_calculator.php">
            <label for="num1">Enter First Number:</label>
            <input type="number" name="num1" required>
            
            <br><br>

            <label for="operation">Select Operation:</label>
            <select name="operation" required>
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (*)</option>
                <option value="divide">Division (/)</option>
            </select>
            
            <br><br>
            
            <label for="num2">Enter Second Number:</label>
            <input type="number" name="num2" required>
            
            <br><br>
            
            <input type="submit" name="calculate" value="Calculate">
        </form>

        <?php
        if(isset($_POST['calculate'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = 0;

            switch($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        echo "<p>Error: Division by zero is not allowed.</p>";
                        exit;
                    }
                    break;
                default:
                    echo "<p>Error: Invalid operation selected.</p>";
                    exit;
            }
            
            echo "<p>Result: {$num1} {$operation} {$num2} = {$result}</p>";
        }
        ?>
    </div>
</body>
</html>
