<?php

$conexao = mysqli_connect ("localhost", "root", "", "desafiodh");
//  $email = $_POST['inpEmail'];
//  $senha = $_POST['inpSenha'];
// $conf = $_POST['inpConf'];

if($_POST){
    $loginOk = logar($_POST['inpEmail'],$_POST['inpSenha']);
    if($loginOk){
        
        //criando a session
        session_start();
        $_SESSION['logado'] = true;
        
        //redireciomento 
        header('location:index.php');
    } 
} else {
    $loginOk = true;
}

function logar($email,$senha){
    global $conexao;
    $resultado = mysqli_query($conexao, "select * from cadastrousuarios where Email_Usuario = '{$_POST['inpEmail']}' and Senha_Usuario = '{$_POST['inpSenha']}'");
    $lista = mysqli_fetch_assoc($resultado);

    var_dump($lista);

        // $achou = false;
        //  if($email == $lista["Email_Usuario"]){
        //      $achou = true;
        //  }
 
        //  if(!$achou){
        //      return false;
        //  }else {
        //      $senhaok = password_verify($senha,$lista["Senha_Usuario"]);
        //      return $senhaok;
        //  }
        
     }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
    <h2>Faça seu login</h2>
    <form action="" method="post">
        <div class="form-group ">
            <label>Email do usuairo:<sup>*</sup></label>
            <input type="email" name="inpEmail" class="form-control" value="" required>
            <span class="help-block"></span>
        </div>
        <div class="form-group ">
            <label>Senha:<sup>*</sup></label>
            <input type="password" name="inpSenha" class="form-control" value="" required>
            <span class="help-block"></span>
        </div>
        <!-- <div class="form-group ">
            <label>Confirmacao da senha:<sup>*</sup></label>
            <input type="password" name="inpConf" class="form-control" value="">
            <span class="help-block"></span>
        </div> -->
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Enviar">
            <input type="reset" class="btn btn-default" value="Resetar campos">
        </div>
    </form>
</div>

</body>
</html>