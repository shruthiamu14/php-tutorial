<?php
    echo 'Heyloooooo!';
    $name = 'John Doe';
    $age = 20;
    $name = 'Jane Doe';
    define('NAME', 'John Doe');

    $stringOne = 'my email is ';
    $stringTwo = 'shruthi@gmail.com';
    echo $stringOne . $stringTwo; 
    echo 'Hey, my name is ' . $name . ' and I am ' . $age . ' years old.';
    echo "Hey, my name is $name and I am $age years old.";
    echo "Saurabh screamed \"whaaaa\"";
    echo 'Saurabh screamed "whaaaa"';
    echo $name[0];
    echo strlen($name);
    echo strtoupper($name);
    echo strtolower($name);
    echo str_replace('J', 'K', $name);

    $radius = 25;
    $pi = 3.14;
    // basic operators => *, /, +, -, **
    echo $pi * $radius**2;
    // order of operations (B I D M A S)
    echo 2 * (4 + 9) / 3;
    //increament & decreament operators
    echo $radius++;
    echo $radius--;
    // shorthand operators
    $age += 10;
    $age -= 10;
    echo $age;
    // number functions
    echo floor($pi);
    echo ceil($pi);
    echo pi();


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
 </head>
 <body>
    
    <h1><?php echo 'USER PAGE'; ?></h1>
    <div><?php echo $name; ?></div>
    <div><?php echo NAME; ?></div>
    <div><?php echo $age; ?></div>







 </body>
 </html>
