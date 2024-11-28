<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Lecture</title>
</head>
<body>
    <h1>Basic of PHP</h1>
    <style>
        *{
            font-family: "Bookman old Style";
        }
        h1{
            text-align: center;
            text-decoration: underline;
            font-size: 40px;
        }
        .sub_heading{
            font-size: 20px;
        }
    </style>
    <div class="container">

        
        <?php
            // Php code is here -> and this is how you write comment in php
            echo "<b class='sub_heading'>Hello World</b> <br>";
            echo "Hello WOrld -> This is printed using PHP";
            echo "<br>";
            echo "<br>";

            echo "<b class='sub_heading'>Variable In PHP</b>";
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
            echo "<b class='sub_heading'>Operators in PHP</b>";
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

            echo "<b class='sub_heading'>Data Type</b><br>";
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

            echo "<b class='sub_heading'>Constant</b><br>";
            define('PI', 3.14);
            echo PI;
        ?>
    </div>
</body>
</html>