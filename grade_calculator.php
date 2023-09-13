
<html>
<head>
    <title>Grade Calculator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgba(255, 99, 71, 0.4); 
        }

        .container {
            background-color: #fff; 
            padding: 40px;
            border-radius: 50px;
            box-shadow: 0 0 100px #6a5acd;
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
        <h2>Grade Calculator</h2>
        <form method="post" action="grade_calculator.php">
            <label for="score">Enter Score:</label>
            <input type="number" name="score" required>
            
            <br><br>
            
            <input type="submit" name="calculate" value="Calculate Grade">
        </form>

        <?php
        if(isset($_POST['calculate'])) {
            $score = $_POST['score'];
            
            
            $grades = [
                ['A', 90],
                ['B', 80],
                ['C', 70],
                ['D', 60],
                ['F', 0]
            ];
            
            $grade = 'F'; // Default grade
            
            
            foreach ($grades as $value) {
                if ($score >= $value[1]) {
                    $grade = $value[0];
                    break;
                }
            }
            
            echo "<p>Your grade is: {$grade}</p>";
        }
        ?>
    </div>
</body>
</html>
