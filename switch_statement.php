<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Switch cases</title>
</head>
<body>
    <?php
    $a = 'Janmay';
    switch ($a) {
        case 'Bhatt':
            echo 'Case 1';
            break;
        case 'Janmay':
            echo 'Case 2';
            break;
        case 'Janmay Bhatt';
            echo 'Case 3';
            break;
        case 'Bhatt Janmay':
            echo 'Case 4';
            break;
        default:
            echo 'Case default';
            break;
    }
    ?>
</body>
</html>