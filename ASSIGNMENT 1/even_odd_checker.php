<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>even_odd_checker</title>
</head>
<body>
    <form action="even_odd_checker.php" method="post">
    <h2>Even or Odd Checker </h2>
     Enter Value: <input type="number" name="num_field" required>         
     <br><br>
        <input type="submit" name="submit" value="Check">   
 
    </form>
    
</body>
</html>

<?php

    if (isset($_POST["submit"])) {
        $num_field = $_POST["num_field"];

        if($num_field % 2 ==0 ){
           echo "<p>The number is EVEN";
            }
            else{echo "<p>The number is ODD ";}
    
    }