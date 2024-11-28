<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Lecture</title>
</head>
<body>
    <div class="container">
        <h1>Learning PHP</h1>

        
        <?php
            // Php code is here -> and this is how you write comment in php
            echo "Hello WOrld -> This is printed using PHP";
            echo "<br>";
            echo "<br>";

            echo "<b>Variable In PHP</b>";
            echo "<br>";
            $varable1 = 1;
            $varable2 = 2;
            echo $varable1;
            echo $varable2;
            echo "<br>";
            echo $varable1 + $varable2;
            // php is not Case Sensitive

            echo "<br>";
            echo "<br>";
            echo "<b>Operators in PHP</b>";
            echo "<br>";
            echo "Arathmatic Operators: -, +, *, /";
            echo "<br>";
            echo "Assignment Operators: =, +=, -=, *=, /=";
            echo "<br>";
            echo "Comparision Operators: ==, >=, <=, !="; 
            // var_dump() -> This is a function used to see the datatype of any variable
            echo "<br>";
            echo "Increment/Decrement Opeartors: ++, --";
            echo "<br>";
            echo "Logical Operator: and(&&), or(||), xor, not(!)";
            echo "<br>";
            echo "<br>";

            echo "<b>Data Type</b><br>";
            echo "String, Integer, Float, Boolean, Array, Object <br>";
            echo "String";
            $string = "This is a String";
            var_dump($string);
            echo "<br>";
            echo "Integer: ";
            $int = 10;
            echo var_dump($int);
            echo "<br>";
            echo "Float: ";
            $float = 55.6;
            echo var_dump($float);
            echo "<br>";
            echo "Boolean: ";
            $bol = true;
            echo var_dump($bol);
            echo "<br>";
            echo "<br>";

            echo "<b>Constant</b><br>";
            define('PI', 3.14);
            echo PI;
        ?>
    </div>
</body>
</html>