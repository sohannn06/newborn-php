
<html>
<head>
    <title>Weather Report</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color:  #00FFFF; /* Background color for the entire page */
        }

        .container {
            background-color: #fff; 
            padding: 50px;
            border-radius: 40px;
            box-shadow: 0 0 40px #0000FF;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Weather Report</h2>
        <form method="post" action="weather_report.php">
            <label for="temperature">Enter Temperature (°C):</label>
            <input type="number" name="temperature" required>
            
            <br><br>
            
            <input type="submit" name="check" value="Check Weather">
        </form>

        <?php
        if(isset($_POST['check'])) {
            $temperature = $_POST['temperature'];
            $message = '';

            
            if ($temperature <= 0) {
                $message = "It's freezing!";
            } elseif ($temperature > 0 && $temperature < 15) {
                $message = "It's cool.";
            } elseif ($temperature >= 15) {
                $message = "It's warm.";
            }

            echo "<p>{$message}</p>";
        }
        ?>
    </div>
</body>
</html>
