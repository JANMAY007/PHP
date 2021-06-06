<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Conditional Statements</title>
</head>
<body>
    <?php
    $var = 9;
    if ($var > 10)
    {
        echo 'variable is greater than 10';
    }
    elseif ($var < 10)
    {
        echo 'variable is less than 10';
    }
    else
    {
        echo 'variable is equal to 10';
    }
    ?>
</body>
</html>