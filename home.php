<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<h2>Seja bem vindo '.$_SESSION['login'].'</h2>';
    echo '<a href="?logout">Fazer Logout!</a>'
    ?>

</body>
</html>


