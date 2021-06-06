<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Operators</title>
</head>
<body>
    <h2> PHP Arithmetic Operators </h2>
    <?php
    $x = 50; 
	$y = 20;

	echo $x + $y;
	echo "<hr />";

	echo $x - $y;	
	echo "<hr />";	

	echo $x * $y;	
	echo "<hr />";	

	echo $x / $y;
	echo "<hr />";	

	echo $x % $y;
    ?>

    <h2> PHP Assignment Operator </h2>
    <?php
    $x = 20; 
	echo $x;
    ?>

    <h2> Comparison Operators </h2>
    <?php

	$x = 300; 
	$y = "300";
	var_dump($x == $y); // Output is True because x = y

	$x = 300; 
	$y = "300";
	var_dump($x === $y); // Output is False because types are not equal

	$x = 300; 
	$y = "300";
	var_dump($x != $y); // Output is False because Values are equal

	$x = 300; 
	$y = "300";
	var_dump($x <> $y); // Output is False because values are equal

	$x = 300; 
	$y = "300";
	var_dump($x !== $y); // Output is False because types are not equal

	$x = 300; 
	$y = 500;
	var_dump($x > $y); // Output is False because x is not greater than y

	$x = 300; 
	$y = 500;
	var_dump($x < $y); // Output is True because x is less than y

	$x = 300; 
	$y = 500;
	var_dump($x >= $y); // Output is False because x not greater than or equal to y

	$x = 300; 
	$y = 500;
	var_dump($x <= $y); // Output is True because x is less than y
    ?>

    <h2> Increment/Decrement Operators </h2>
    <?php
        //Post-increment - Returns $x, then increments $x by one
        $x = 50; 
        echo $x++;
        echo "<hr />";

        //Pre-increment - Increments $x by one, then returns $x
        $x = 50; 
        echo ++$x;
        echo "<hr />";
        
        //Pre-decrement - Decrements $x by one, then returns $x
        $x = 50; 
        echo --$x;
        echo "<hr />";
        
        //Post-decrement - Returns $x, then decrements $x by one
        $x = 50; 
        echo $x--;
    ?>

    <h2> Logical Operators </h2>
    <?php 
        //And - True if both $x and $y are true
        $x = 200; 
        $y = 300;
        if ($x == 200 and $y == 300)
        {
            echo "True";
            echo "<hr />";
        }
            
        //Or - True if either $x or $y is true
        $x = 200; 
        $y = 300;
        if ($x == 200 or $y == 90)
        {
            echo "True";
            echo "<hr />";
        }
        
        //And - && - True if both $x and $y are true
        $x = 200; 
        $y = 300;
        if ($x == 200 && $y == 300)
        {
            echo "True";
            echo "<hr />";
        }
        
        //Or - $x || $y - True if either $x or $y is true
        $x = 200; 
        $y = 300;
        if ($x == 200 || $y == 80)
        {
            echo "True";
            echo "<hr />";
        }
        
        //Not - !$x - True if $x is not true
        $x = 200; 
        $y = 300;
        if ($x !== 100)
        {
            echo "True";
            echo "<hr />";
        }
    ?>

    <h2> PHP String Operators </h2>
    <?php
    //Concatenation - Concatenation of $x and $y
	$x = "Hello";
	$y = " world!";
	echo $x . $y;
	echo "<hr />";
	
	//Concatenation assignment - Appends $txt2 to $txt1
	$x = "Hello";
	$y = " world!";
	$x .= $y;
	echo $x;
    echo "<br>";
    echo $y;
	echo "<hr />";
    ?>

    <h2> Array Operators </h2>
    <?php
    //Union - Union of $x and $y
	$x = array("a" => "blue", "b" => "red");
	$y = array("c" => "pink", "d" => "brown");
	print_r($x + $y);
	echo "<hr />";
	
	//Equality - Returns true if $x and $y have the same key/value pairs
	$x = array("a" => "blue", "b" => "red");
	$y = array("c" => "blue", "d" => "red");
	var_dump($x == $y);
	echo "<hr />";
	
	//Identity - Returns true if $x and $y have the same key/value pairs in the same order and of the same types
	$x = array("a" => "blue", "b" => "red");
	$y = array("a" => "pink", "d" => "brown");
	var_dump($x === $y);
	echo "<hr />";
	
	//Inequality - Returns true if $x is not equal to $y
	$x = array("a" => "blue", "b" => "red");
	$y = array("a" => "pink", "d" => "brown");
	var_dump($x != $y);
	echo "<hr />";
	
	//Inequality - Returns true if $x is not equal to $y
	$x = array("a" => "blue", "b" => "red");
	$y = array("a" => "pink", "d" => "brown");
	var_dump($x <> $y);
	echo "<hr />";
	
	//Non-identity - Returns true if $x is not identical to $y
	$x = array("a" => "blue", "b" => "red");
	$y = array("a" => "pink", "d" => "brown");
	var_dump($x !== $y);
	echo "<hr />";
    ?>
</body>
</html>