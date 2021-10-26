<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>
    <h1>Escape Sequence</h1>
    <?php
        echo '"most programmers say it\'s better to use \'echo\' rather than \'print\' " says who?';
    
    
    echo '<h1>Output Strings</h1>';

    //My first PHP
    echo "Name : Manisha Yadav<br>";
    echo "Student ID : 7727280";


        echo '<h1>Variables</h1>';
        $name = "Manisha";
        $age = 20;
        echo '<br>Hi my name is ' .$name. ' and I am '  .$age. ' years old.';
        echo "<br>Mi nomre es $name y tengo $age anos de edad.";

        echo '<br/>';
        echo '<h1>Functions</h1>';
 
        //gettype() return the datatype of variable.
        echo gettype($name);
        echo '<br/>';

        //strlen() returns the length of string.
        echo strlen($name);
        echo '<br/>';

        //strtoUpper() converts all character to uppercase.
        echo strtoUpper($name);


        echo '<h1>Arithmatic</h1>';

        $num1 = 9;
        $num2 = 12;
        echo 'First number is '.$num1;
        echo '<br />Second number is '.$num2;
        $multiply = $num1 * $num2;
        $divide = $num2 / $num1;
        $percentage = ($num1/$num2)*100;
        $rem = $num2 % $num1;

        echo '<br />The multiplication of given two number is '.$multiply;
        echo '<br />The division of given two number is '.number_format($divide,2);
        echo '<br /> Required Percentage :'.$percentage;
        echo '<br />The reminder of given two number is '.$rem;

        echo '<h1> extension </h1>';
        $meter = 1.8;
        $inch = ($meter*100)/2.54;
        $final = $inch/12;

        echo 'Name :'.$name.'<br />';
        echo 'Age :'.$age.'<br />';
        echo 'Height in meters :'.$meter.'<br />';
        echo 'Height in feet and inches: '.floor($final).'ft '.($final-(floor($final))).'inches';
    ?>



<footer>
    <small> <a href="../watIndex.html">Home</a></small>
</footer>
</body>
</html>