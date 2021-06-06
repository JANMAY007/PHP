<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Sorting arrays</title>
</head>
<body>
    <?php
    # sorting numeric arrays
    $values = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1);
    sort($values);
    foreach ($values as $value) {
        echo $value;
        echo "<br>";
    }
    echo "<hr>";
    # sorting string arrays
    $names = array('Janmay', 'Bhatt', 'Amar', 'Hemangini');
    sort($names);
    for ($i=0; $i < count($names); $i++) { 
        echo $names[$i];
        echo "<br>";
    }
    echo "<hr>";
    // sorting associative arrays
    $name_grades = array("Janmay"=>100, "Bhatt"=>80);
    asort($name_grades);
    foreach ($name_grades as $name => $grade) {
        echo $name . "->" . $grade . "<br>";
    }
    ?>
</body>
</html>