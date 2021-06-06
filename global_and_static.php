<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php global and static</title>
</head>
<body>
    <?php
    $x = 5;
    $y = 10;
    function global_var()
    {
        /*
        php stores global variables in an array GLOBAL
        so both the ways are true
        */
        # $GLOBALS['y']  = $GLOBALS['x'] + $GLOBALS['y'];
        global $x, $y;
        $y = $x + $y;
    }
    global_var();
    echo $y;
    echo "<br>";
    function static_var()
    {
        static $a = 10;
        echo $a;
        $a++;
    }
    static_var();
    echo "<br>";
    static_var();
    echo "<br>";
    static_var();
    echo "<br>";
    static_var();
    echo "<br>";
    ?>
</body>
</html>