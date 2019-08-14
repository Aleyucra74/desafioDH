<html>
    <head>
        <title> Remoção </title>
    </head>
    <body>
        <?php
        $codigo = $_GET["Codigo"]; // pegar o id da lista de clientes
        $conexao = mysqli_connect("localhost", "root", "", "desafiodh");
        
        function removerUsuario($conexao, $codigo){
            $query = "DELETE FROM cadastrousuarios WHERE Cod_Usuario = {$codigo}";
            return mysqli_query ($conexao, $query);
        }
        if (removerUsuario($conexao, $codigo)){
            echo "Remoção efetuada com sucesso";
        }else{
            echo "Erro na tentativa de remoção";
        }
        ?>
        <br><br> <a href="cadastroUsuarios.php"> Voltar</a>
    </body>
</html>