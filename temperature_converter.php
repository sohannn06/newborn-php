<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ff6347; 
        }

        .container {
            background-color: #fff; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px ;
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
        <h2>Temperature Converter</h2>
        <form method="post" action="temperature_converter.php">
            <label for="temperature">Enter Temperature:</label>
            <input type="number" name="temperature" required>
            
            <label for="conversion">Select Conversion:</label>
            <select name="conversion" required>
                <option value="c_to_f">Celsius to Fahrenheit</option>
                <option value="f_to_c">Fahrenheit to Celsius</option>
            </select>
            
            <br><br>
            
            <input type="submit" name="convert" value="Convert">
        </form>

        <?php
        if(isset($_POST['convert'])) {
            $temperature = $_POST['temperature'];
            $conversion = $_POST['conversion'];
            
            if ($conversion == "c_to_f") {
                $converted_temperature = ($temperature * 9/5) + 32;
                echo "<p>{$temperature}°C is equal to {$converted_temperature}°F</p>";
            } elseif ($conversion == "f_to_c") {
                $converted_temperature = ($temperature - 32) * 5/9;
                echo "<p>{$temperature}°F is equal to {$converted_temperature}°C</p>";
            }
        }
        ?>
    </div>
</body>
</html>
