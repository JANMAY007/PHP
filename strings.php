<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Strings</title>
</head>
<body>
    <?php
    $word = 'Hello, World!';
    echo str_word_count($word);
    echo "<hr>";
    echo strrev($word);
    echo "<hr>";
    echo strpos($word, ',');
    echo "<hr>";
    echo str_replace('World', 'Janmay', $word);
    ?>
</body>
</html>