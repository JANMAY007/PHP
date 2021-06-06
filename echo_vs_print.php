<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php echo vs print</title>
</head>
<body>
    <?php
    echo "<h1>Test Header</h1>";
    echo "Sample Paragraph 1. <br>";
    echo "This ", "string ", "has ", "multiple parameters ";
    echo "<hr />";
    $txt1 = "Sample Text 1";
    $txt2 = "Soccer";
    $x = 20;
    $y = 30;
    echo "<h2>" . $txt1 . "</h2>";
    echo "I like " . $txt2 . "<br>";
    echo $x + $y;
    print "<h1>Test Header</h1>";
    print "Sample Paragraph 1. <br>";
    print "<hr />";
    $txt1 = "Sample Text 1";
    $txt2 = "Soccer";
    $x = 20;
    $y = 30;
    print "<h2>" . $txt1 . "</h2>";
    print "I like " . $txt2 . "<br>";
    print $x + $y;
    ?>
</body>
</html>