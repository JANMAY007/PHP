<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Arrays</title>
</head>
<body>
    <?php
    # Indexed array
    $colors = array('red', 'green', 'blue');
    echo "My favourite colors are ";
    foreach ($colors as $color) {
        echo "$color ";
    }
    echo "<hr>";
    # Array length
    echo count($colors);
    echo "<hr>";
    # Associative Arrays
    $total_score = array("Janmay"=>80, "Bhatt"=>100);
    foreach ($total_score as $name => $score) {
        echo "$name scored $score marks";
        echo "<hr>";
    }
    // Multidimensional Arrays
    $name_grade = array(
        array("Janmay", 100),
        array("Bhatt", 80),
        array("Janmay Bhatt", 90),
    );
    $length = count($name_grade);
    echo $length;
    echo "<br>";
    for ($i=0; $i < $length; $i++) { 
        for ($j=0; $j < $length - 1; $j++) { 
            echo $name_grade[$i][$j] . " ";
        }
        echo "<br>";
    }
    ?>
</body>
</html>