<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Part-2 PHP</title>
</head>
<body>
    <style>
        *{
            font-family: "Bookman Old Style";
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            margin: 40px, 0px, 0px, 20px;
            max-width: 80%;
            margin: auto;
            background-color: rgb(186, 181, 181);
            padding: 23px;
        }
        h1{
            text-decoration: underline;
        }
        .sub_heading{
            font-size: 20px;
        }
    </style>
    <div class="container">
        <h1>Lets learn about PHP</h1><br>
        <p>Your Party Status is Here</p>
        <?php
        $age = 25;
        if($age>18){
            echo "You can go to the party";
        } else{
            echo "You can not Go to the Party";
        }

        echo "<br>";
        echo "<br>";
        
        echo "<b class='sub_heading'>Array</b><br>";
        $language = array('Python', 'C++', 'C', 'JAVA', 'HTML', 'CSS', 'JS', 'PHP');
        echo $language[0];
        echo "<br>";
        echo count($language);
        echo "<br>";
        echo "<br>";

        echo "<b class='sub_heading'>Loops</b><br>";
        echo "While || Do-While || For || Foreach <br>";
        echo "<u>i. While Loop</u> <br>";
        $a = 1;
        while($a<=5){
            echo $a;
            $a++;
            echo "<br>";
        }

        echo "<br>";
        echo "<u>ii. Do-While Loop</u><br>";
        $lan = 0;
        do{
            echo $language[$lan];
            $lan++;
            echo "<br>";
        } while($lan < count($language));
        echo "<br>";

        echo "<u>iii.For Loop</u><br>";
        for ($i=0; $i <= 5; $i++) { 
            echo $i;
            echo "<br>";
        }
        echo "<br>";

        echo "<u>iv. Foreach Loop</u><br>";
        foreach($language as $value){
            echo $value;
            echo "<br>";
        }
        echo "<br><br>";

        echo "<b class='sub_heading'>Function</b><br>";
        function number($num){      // --|
            echo $num;              //   |- Function Defination
            echo "<br>";            //   |
        }                           // --|
        number(5); // -> Function Calling
        ?>
    </div>
</body>
</html>