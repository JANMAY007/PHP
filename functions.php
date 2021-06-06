<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Functions</title>
</head>
<body>
    <?php
    // Simple Function
    function bikes()
    {
        echo 'Harley Davidson';
    }
    bikes();
    echo "<br>";
    // Function with arguments
    $car = 'Jaguar';
    function cars($car)
    {
        echo "$car";
    }
    cars($car);
    echo "<br>";
    // Function with default argument
    function my_age($min_age = 20)
    {
        echo "My age is $min_age";
        echo "<br>";
    }
    my_age();
    my_age(10);
    my_age(30);
    echo "<br>";
    // Function with return statement
    function solve($a, $b)
    {
        $c = $a + $b;
        return $c;
    }
    echo "10 + 12 = " . solve(10, 12);
    ?>
</body>
</html>