<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
    This is my first php website 
    <?php
    define('PI3' , 3.14);
    echo "Hello world and this is printed using php";
    // Single Line Comment 
    /*
        This
        is 
        a 
        multi
        line 
        comment
    */
    // Lorem, ipsum dolor.
    // locale_accept_from_http

    $variable1 =34;
    $variable2 =45;
    echo $variable1;
    echo $variable2;

    echo $variable1 + $variable2;

    // Operators in PHP
    // Arithemetic Operators
    echo "<br>";
    echo "The value of variable1 + variable2 is";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of variable1 - variable2 is";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of variable1 * variable2 is";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of variable1 / variable2 is";
    echo $variable1 / $variable2;
    echo "<br>";
    // Assignment Operators
    $newVar = $variable1; 
    // $newVar += 1;
    // $newVar -= 1;
    // $newVar *= 2;
    $newVar /=2;
    echo "The value of new variable is";
    echo $newVar;
    echo "<br>";

    // Comparison Operators
    // echo "<h1> Comparison Operators </h1>";
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1<=4 is";
    echo var_dump(1<=4);
    echo "<br>";
    
    // Increment/Decrement Operators 
    // echo $variable1++;
    // echo $variable1--;
    // echo --$variable1;
    echo --$variable1;
    echo "<br>";
    echo $variable1;
    // Logical Operators
    // and (&&)
    // or (||)
    // xor
    // !

    // $myVar = (true and true);
    // $myVar = (false and true);
    // $myVar = (false and false);
    // $myVar = (true and false);

    // $myVar = (true xor true);
    // $myVar = (false and true);
    // $myVar = (false xor false);
    // $myVar = (true and false);

    $myVar = (true or false);
    echo "<br>";
    echo var_dump($myVar);

    ?>

   <?php

    // Data types in php
    // 1. Strings
    // 2. Integer
    // 3. Float
    // 4. Boolean
    // 5. Object 
    echo "<br>Data types <br>";
    $var ="This is a string";
    echo var_dump($var);
    echo "<br>";
    $var = 67;
    echo var_dump($var);
    echo "<br>";
    $var = 67.1;
    echo var_dump($var);
    echo "<br>";
    $var = true;
    echo var_dump($var);
    echo "<br>";
    echo PI3;
    ?>
    
    </div>
</body>
</html>