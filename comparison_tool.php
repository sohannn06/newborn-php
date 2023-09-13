
<html>
<head>
    <title>Number Comparison Tool</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #00FF00; 
        }

        .container {
            background-color: #fff; 
            padding: 50px;
            border-radius: 40px;
            box-shadow: 0 0 50px #00FFFF;
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
        <h2>Number Comparison Tool</h2>
        <form method="post" action="comparison_tool.php">
            <label for="number1">Enter First Number:</label>
            <input type="number" name="number1" required>
            
            <br><br>

            <label for="number2">Enter Second Number:</label>
            <input type="number" name="number2" required>
            
            <br><br>
            
            <input type="submit" name="compare" value="Compare Numbers">
        </form>

        <?php
        if(isset($_POST['compare'])) {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];

            $largerNumber = ($number1 > $number2) ? $number1 : $number2;
            
            echo "<p>The larger number is: {$largerNumber}</p>";
        }
        ?>
    </div>
</body>
</html>
