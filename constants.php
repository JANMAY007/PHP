<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Constants</title>
</head>
<body>
    <?php
    define('case_sensitive', 'Hi I am Janmay!');
    echo case_sensitive;
    echo "<hr>";
    define('CASE_INSENSITIVE', 'Hello I am Janmay!', true);
    echo case_insensitive;
    echo "<hr>";
    define('global_constant', 'This is a global constant.');
    function my_function()
    {
        echo global_constant;
    }
    my_function();
    ?>
</body>
</html>