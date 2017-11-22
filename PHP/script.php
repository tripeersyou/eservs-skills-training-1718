<?php
    // * Variables Printing and Concatenation
    echo "Hello World <br>";
    $variable = "Francis";
    echo 'My name is '. $variable;
    echo "<br>My name is $variable<br>";
    $num1 = 1;
    $num2 = 4;
    echo $num1 + $num2."<br>";

    // * Arrays
    $cars = array();
    $cars["Car 1"] = "Volvo";
    echo $cars['Car 1']."<br>";

    $colors = array();
    $colors[0] = "Blue";
    echo $colors[0]."<br>";

    // * Functions
    function add($num1, $num2) {
        echo $num1 + $num2."<br>";
    }
    add(23,32);

    // * If statements
    if (1 > 2) {
        echo "True <br>";   
    } else {
        echo "False <br>";
    }

    // * For Loops
    for ($i=0; $i < 10; $i++) { 
        echo "$i<br>";
    }