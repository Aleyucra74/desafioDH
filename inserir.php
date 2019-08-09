<?php 
    $nomeProduto = $_POST['inpProduto'];
    $descProduto = $_POST['inpDescricao'];
    $valor = $_POST['inpValor'];
    $foto = $_FILES['inpImagem']['name'];

    $conexao = mysqli_connect ("localhost", "root", "", "desafiodh");
    
    function insereValores($conexao, $nomeProduto, $valor, $descProduto, $foto){
        $query = "insert into cadastroprodutos (Nome_Produto, Preco, Descricao_Produto, foto) values ('{$nomeProduto}', '{$valor}', '{$descProduto}', '{$foto}')";
        
        return mysqli_query($conexao, $query);
    }

    if (insereValores($conexao, $nomeProduto, $valor, $descProduto, $foto)){
        echo "Registro realizado com Sucesso<br><br>";
    } else {
        echo "Erro na conexão com o BD <br><br>";
    }
        echo "<a href=cadastro.php> Voltar </a>";

    

?>