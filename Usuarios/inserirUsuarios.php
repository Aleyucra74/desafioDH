<?php
    $usuario = $_POST["inpNomeUsuario"];
    $email = $_POST["inpEmail"];
    $senha = sha1($_POST["inpSenha"]);
    $conf = $_POST["inpConf"];

    $conexao = mysqli_connect ("localhost", "root", "", "desafiodh");
   
    function inserirUsuarios($conexao, $usuario, $email, $senha){
        $query = "insert into cadastrousuarios (Nome_Usuario, Email_Usuario, Senha_Usuario) values ('{$usuario}', '{$email}', '{$senha}')";
        
        return mysqli_query($conexao, $query);
    }

		if($_POST['inpSenha'] != $_POST['inpConf']){
            echo "<script> alert('Senhas diferentes');</script>";
        }

        if (inserirUsuarios($conexao, $usuario, $email, $senha)){
        echo "Registro realizado com Sucesso<br><br>";
    } else {
        echo "Erro na conexão com o BD <br><br>";
    }
        echo "<a href=cadastroUsuarios.php> Voltar </a>";

    
	
?>