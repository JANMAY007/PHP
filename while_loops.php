<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php While loop</title>
</head>
<body>
    <?php
    # while loop
    $var1 = 1;
    while ($var1 <= 10) {
        echo "var1 is $var1<br>";
        $var1++;
    }
    echo "<hr>";
    # do while loop
    $var2 = 12;
    do {
        echo "var2 is $var2<br>";
        $var2--;
    } while ($var2 >= 10);
    ?>
</body>
</html>