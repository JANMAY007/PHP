<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Sended form</title>
</head>
<body>
    <!--This is POST method-->
    First name:
    <?php
    echo $_POST['fname'];
    ?>
    <br>
    E-mail:
    <?php
    echo $_POST['email'];
    ?>
    <!--This is GET method-->
    First name:
    <?php
    echo $_GET['fname'];
    ?>
    <br>
    E-mail:
    <?php
    echo $_GET['email'];
    ?>
</body>
</html>