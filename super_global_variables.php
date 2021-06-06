<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Super global variables</title>
</head>
<body>
    <?php
    $x = 5;
    $y = 10;
    function global_var()
    {
        $GLOBALS['z']  = $GLOBALS['x'] + $GLOBALS['y'];
    }
    global_var();
    echo $z;
    echo "<hr>";
    echo $_SERVER['PHP_SELF'];
    echo "<hr>";
    echo $_SERVER['SERVER_NAME'];
    ?>
</body>
</html>