<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Temperature Converter</title>
</head>
<body>

    <form action="temperature_converter.php" method="post">
        Enter Value: <input type="number" name="num_field" required>    
        To: <select name="temperature">
            
            <option value="C">Celcius</option>
            <option value="F">Farenheit</option>
        </select>

        <br><br>
        <input type="submit" name="submit" value="Convert">
    
    </form>
</body>
</html>

<?php

    if (isset($_POST["submit"])) {
        $num_field = $_POST["num_field"];
        $temp = $_POST["temperature"];

        if ($temp == "F") {
            $result = ($num_field * 9 / 5) + 32;
            echo "<p>Result: " . $result . " Farenheit";
            // I am getting the temp v after selecting the farenheit option, So I have to convert the num_value into farenheit
        } else if ($temp == "C") {
            $result = ($num_field - 32) * 5 / 9;
            
            echo "<p> Result:  $result Celcius";
        } else {
            echo "<p> Please select temperature";
        }
    }

?>
