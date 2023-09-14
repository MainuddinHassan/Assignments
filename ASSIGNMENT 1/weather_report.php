<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weather_report</title>
</head>
<body>
    <form action="weather_report.php" method="post">
        <h2> Weather Report</h2>
        Enter Temperature (in °C) :  <input type="number" name="num_field" required> 
        <br><br>
        <input type="submit" name="submit" value="Check"> 

    </form>
</body>
</html>
<?php

    if (isset($_POST["submit"])) {
        $num_field = $_POST["num_field"];

        
        if($num_field <=10 ){
            $temp = "It's freezing!";}

            else if($num_field >10 && $num_field <= 20  ){
                $temp = "It's cool.";
             }
             else {$temp = "It's warm.";}         
    
             echo "<p >$temp";
    
    
    }
