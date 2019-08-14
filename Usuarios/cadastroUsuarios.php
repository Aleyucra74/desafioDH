<?php
$conexao = mysqli_connect("localhost", "root", "", "desafiodh");
if ($conexao){
    echo "Conectado com Sucesso!";
}else{
    echo "Erro na Conexão";
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
    <h2>Cadastro de Usuarios</h2>
    <p>preencha os campos para o cadastro</p>
    <form action="inserirUsuarios.php" method="post">
        <div class="form-group ">
            <label>Nome do usuario:<sup>*</sup></label>
            <input type="text" name="inpNomeUsuario" class="form-control " value="" required>
            <span class="help-block"></span>
        </div>
        <div class="form-group ">
            <label>Email do usuairo:<sup>*</sup></label>
            <input type="email" name="inpEmail" class="form-control " value="" required>
            <span class="help-block"></span>
        </div>
        <div class="form-group ">
            <label>Senha:<sup>*</sup></label>
            <input type="password" name="inpSenha" class="form-control " value="" required>
            <span class="help-block"></span>
        </div>
        <div class="form-group ">
            <label>Confirmacao da senha:<sup>*</sup></label>
            <input type="password" name="inpConf" class="form-control " value="" required>
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Enviar">
            <input type="reset" class="btn btn-default" value="Resetar campos">
        </div>
    </form>
</div>

<div class="container">
    <table width="370">
        <th width="10">Codigo</th>
        <th width="30"> usuario</th>
        <th width="30"> email</th>
        <th width="300"> senha</th>
    </table>
    <?php
    $resultado = mysqli_query($conexao, "select * from cadastrousuarios");
    while ($lista = mysqli_fetch_assoc($resultado)){ ?>
    
            <table border="1" width="500">
            <tr>
                <td width="10"> <?php echo $lista["Cod_Usuario"] ?> </td>
                <td width="30"> <?php echo $lista["Nome_Usuario"] ?> </td>
                <td width="30"> <?php echo $lista["Email_Usuario"] ?> </td>
                <td width="300"> <?php echo $lista["Senha_Usuario"] ?> </td>
                
                <td width="80"><a href="removerUsuarios.php?Codigo=<?php echo $lista["Cod_Usuario"] ?>"> Remover </a> </td>
            </tr>
        </table>
    <?php
    }
    ?>
    <br><br> <a href="loginUsuario.php"> Faça seu login</a>


</div>

</body>
</html>