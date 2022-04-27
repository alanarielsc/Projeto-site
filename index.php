<?php
 session_start();

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php
 
    if(!isset($_SESSION['login'])){
        if(isset($_POST['acao'])){
            $login = 'alan';
            $senha = '123456';
            
            $loginForm = $_POST['nome'];
            $senhaForm = $_POST['senha'];
            if($login == $loginForm && $senha == $senhaForm){
                $_SESSION['login'] = $login;
                header('location: home.php');
            }else{
                echo 'Dados invalidos';
            }
        }
        include('login.php');
    }else{
        if(isset($_GET['logout'])){
            unset($_SESSION['login']);
            session_destroy();
            
        }
        include('home.php');
    
    }


    ?>
</body>
</html>