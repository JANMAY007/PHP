<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php variable scope</title>
</head>
<body>
    <?php
    $x = 5;
    function test1()
    {
        echo "value of x is $x<br>";
    }
    test1();
    echo "value of x is $x<br>";
    function test2()
    {
        $y = 10;
        echo "value of y is $y<br>";
    }
    test2();
    echo "value of y is $y<br>";
    ?>
</body>
</html>