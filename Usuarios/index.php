<?php
    session_start();
    if(!$_SESSION['logado']){
        header('location:loginUsuario.php');
    }

    if($_POST){

        session_destroy();
        
        header('location:login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logado</title>
</head>
<body>
    <h1>BEM VINDOOO</h1>
</body>
</html>