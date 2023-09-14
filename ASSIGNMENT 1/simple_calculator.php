<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple_calculator</title>
</head>
<body>

<form action="simple_calculator.php" method="post">
    <h2>Simple Calculator</h2>
    Enter First  Value : <input type="number" name ="num_field1"  required><br><br>
    Enter Second Value : <input type="number" name ="num_field2"  required><br><br>
       
         <select name="operation">
            
            <option value="Add">Addition</option>
            <option value="Sub">Subtraction</option>
            <option value="Mult">Multiplication</option>
            <option value="Div">Divsion</option>

        </select>

        <br><br>
        <input type="submit" name="submit" value="Calculate">
    
    


</form>
    
</body>
</html>
<?php

    if (isset($_POST["submit"])) {
        $num_field1 = $_POST["num_field1"];
        $num_field2 = $_POST["num_field2"];
        $operation = $_POST["operation"];

        if( $operation =="Add" ){
           $result =  $num_field1 + $num_field2;
           echo "<p>Your result= $result";
        }
        else if( $operation =="Sub" ){
            $result =  $num_field1 - $num_field2;
            echo "<p>Your result= $result";
         }
        else if( $operation =="Mult" ){
            $result =  $num_field1 * $num_field2;
            echo "<p>Your result= $result";
         }
                else if ($operation == 'Div') {
                    if($num_field2 !=0){
                    $result = $num_field1 / $num_field2;
                    echo "<p>Your result= $result";
                    }
                    else  {echo "<p>You cannot divide anything by 0";}

                  }
            ;
        }

