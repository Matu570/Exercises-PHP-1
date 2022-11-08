<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercises</title>
</head>

<body>
    <?php
    echo "<h1>Exercises:</h1>";
    /*Instructions:
    
    1-Create two variables whose names are country and continent, initialize them with a value and print to screen.
    */
    $country = "Argentina";
    $continent = "América";
    echo "<h2>My country</h2>";
    echo "<h2>I live in $country, in the continent of South $continent/h2>";

    /* 
    Print all even numbers between one and one hundred:
    */
    echo "<hr>";
    echo "<h2>Even numbers</h2>";
    for ($n = 0; $n <= 100; $n += 2) {
        echo "$n";
        if ($n - 100) {
            echo ", ";
        } else {
            echo ".";
        }
    };

    echo "<hr>";
    echo "<h2>The square of the numbers</h2>";
    /* 
    Create a program that print for screen the square of the numbers from 1 to 40.
    */
    for ($i = 1; $i <= 40; $i++) {
        echo "<h3>The square of $i is " . ($i * $i) . "</h3>";
    };

    echo "<hr>";
    echo "<h2>Get numbers</h2>";
    /*Use two numbers that you will take from the URL and do all the operations of a calculator with these.
    So, in this example, we will add in the URL "?number1=10&number2=5"*/
    var_dump($_GET);
    if (isset($_GET['number1']) && isset($_GET['number2'])) {
        $number1 =$_GET['number1'];
        $number2 =$_GET['number2'];
        echo "<h3>The sum of $number1 plus $number2 is " . ($number1 + $number2) . "<h3>";
        echo "<h3>The subtracton of $number1 minus $number2 is " . ($number1 - $number2) . "<h3>";
        echo "<h3>The multiplication of $number1 by $number2 is " . ($number1 * $number2) . "<h3>";
        echo "<h3>The result of $number1 divided by $number2 is " . ($number1 / $number2) . "<h3>";
    } else {
        echo "<h3>Enter the values correctly</h3>";
    };

    echo "<hr>";
    echo "<h2>We continue get numbers and perform operatios</h2>";
    /*
    Show all the numbers betwen two values that we will get from URL
    */
    while($number2<=$number1){
        echo "<h3>$number2</h3>";
        $number2++;
    };

    echo "<hr>";
    echo "<h2>Multiplication Table</h2>";
    /*
    Print on screen all the multiplication tables from 1 to 10 and show it in a HTML table.
    */
    echo "<table border='1'>";
        echo "<tr>";
            for($header=1;$header<=10;$header++){
                echo "<th>Table of $header</th>";
            };   
        echo "</tr>";//Opening Table


        //Instruction for create the multiplication tables.
        for($trows=1;$trows<=10;$trows++){
            echo "<tr>";
            for($td=1;$td<=10;$td++){
                echo "<td>$td x $trows= ".($trows*$td)."</td>";
            };
            echo "</tr>";
        };


    echo "</table>";//Closing Table
    
    
    echo "<hr>";
    echo "<h2>Odd numbers</h2>";
    /*
    Show all the odd numbers betwen two values that we will get from URL
    */
    while($number2<=30){
        if($number2%2 !=0){
            echo "<h3>$number2</h3>";
        };
        $number2++;
    };
    ?>
</body>

</html>