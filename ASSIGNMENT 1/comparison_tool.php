<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comparison_tool</title>
</head>
<body>
    <h2> Comparison Tool </h2>
    <form action="comparison_tool.php" method = "post">
    Enter 1st number   :  <input type="number" name="num_field1" required>  <br><br>
    Enter 2nd number   : <input type="number" name="num_field2" required>  <br><br>

        <input type="submit" name="submit" value="Check">

    </form>

   
</body>
</html>
<?php

if (isset($_POST["submit"])) {
    $num_field1 = $_POST["num_field1"];
    $num_field2 = $_POST["num_field2"];

    if( $num_field1> $num_field2){
        $result = $num_field1;
    }
    else{ $result = $num_field2;}
    echo "<p>Larger Number is $result";
}