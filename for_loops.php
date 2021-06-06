<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php For loops</title>
</head>
<body>
    <?php
    // for loop
    for ($i=0; $i < 11; $i++) { 
        echo "$i<br>";
    }
    echo "<hr>";
    // for each loop
    $companies = array('TCS', 'RIL', 'NIRMA');
    foreach ($companies as $company) {
        echo "$company<br>";
    }
    ?>
</body>
</html>