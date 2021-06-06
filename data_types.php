<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Datatypes</title>
</head>
<body>
    <?php
    # String
    $x = 'Hello, World!';
    echo $x;
    echo "<hr>";
    # Integer
    $y = 10000;
    var_dump($y);
    echo "<hr>";
    # Float
    $z = 12.34;
    var_dump($z);
    echo "<hr>";
    // Array
    $color = array('Red', 'Green', 'Blue');
    var_dump($color);
    echo "<hr>";
    // Null
    $toy = 'car';
    $toy = null;
    var_dump($toy);
    // Boolean
    $a = true;
    $b = false;
    var_dump($a);
    var_dump($b);
    echo "<hr>";
    ?>
</body>
</html>