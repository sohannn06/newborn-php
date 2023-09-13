
<html>
<head>
    <title>Even and Odd Number Checker</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: hsl(0, 0%, 50%);
        }

        .container {
            background-color: #fff; 
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0 0 100px #ff0000;
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
        <h2>Even and Odd Number Checker</h2>
        <form method="post" action="even_odd_checker.php">
            <label for="number">Enter a Number:</label>
            <input type="number" name="number" required>
            
            <br><br>
            
            <input type="submit" name="check" value="Check Number">
        </form>

        <?php
        if(isset($_POST['check'])) {
            $number = $_POST['number'];
            $result = ($number % 2 == 0) ? "Even" : "Odd";
            
            echo "<p>{$number} is {$result}</p>";
        }
        ?>
    </div>
</body>
</html>
