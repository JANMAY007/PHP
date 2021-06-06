<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php POST vs GET basics</title>
</head>
<body>
    <!--POST form-->
    <form action="send.php" method="post">
        <p>First Name: <input type="text" name="fname" id="fname"></p>
        <p>E-mail: <input type="email" name="email" id="email"></p>
        <input type="submit" value="submit">
    </form>
    <!--GET form-->
    <form action="send.php" method="get">
        <p>First Name: <input type="text" name="fname" id="fname"></p>
        <p>E-mail: <input type="email" name="email" id="email"></p>
        <input type="submit" value="submit">
    </form>
</body>
</html>