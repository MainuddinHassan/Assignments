<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade_calculator</title>
</head>
<body>
    <form action="Grade_calculator.php" method="post">
        <h2>Grade Calculator</h2>
        Enter Test 1 Result: <input type="number" name="num_field1" required><br><br>
        Enter Test 2 Result: <input type="number" name="num_field2" required><br><br>
        Enter Test 3 Result: <input type="number" name="num_field3" required><br> <br>

        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $num_field1 = $_POST["num_field1"];
        $num_field2 = $_POST["num_field2"];
        $num_field3 = $_POST["num_field3"];
    
        $average = ($num_field1 + $num_field2 + $num_field3) / 3;
    
        if ($average >= 90) {
            $grade = 'A';
        } elseif ($average >= 80) {
            $grade = 'B';
        } elseif ($average >= 70) {
            $grade = 'C';
        } elseif ($average >= 60) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        echo "<p>Average Number: $average</p>";
        echo "<p>Letter Grade  : $grade</p>";
    }
    ?>
</body>
</html>