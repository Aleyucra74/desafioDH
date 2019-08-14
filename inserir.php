<?php 
    $nomeProduto = $_POST['inpProduto'];
    $descProduto = $_POST['inpDescricao'];
    $valor = $_POST['inpValor'];
    $foto = 'fotos/'. $_FILES['inpImagem']['name'];

    	
	if($_POST){

		if($_FILES['inpImagem']){
			if($_FILES['inpImagem']['error'] == 0){
				//salvando a foto de forma descente
				move_uploaded_file($_FILES['inpImagem']['tmp_name'],'./fotos/'.$_FILES['inpImagem']['name']);
				
				$arquivo_def = './fotos/'.$_FILES['inpImagem']['name'];
			}else {
				$erros[] = 'errUpload';
			}
		}

	}

    $conexao = mysqli_connect ("localhost", "root", "", "desafiodh");
    
    function insereValores($conexao, $nomeProduto, $valor, $descProduto, $foto){
        $query = "insert into cadastroprodutos (Nome_Produto, Preco, Descricao_Produto, url_foto) values ('{$nomeProduto}', '{$valor}', '{$descProduto}', '{$foto}')";
        
        return mysqli_query($conexao, $query);
    }

    if (insereValores($conexao, $nomeProduto, $valor, $descProduto, $foto)){
        echo "Registro realizado com Sucesso<br><br>";
    } else {
        echo "Erro na conexão com o BD <br><br>";
    }
        echo "<a href=cadastro.php> Voltar </a>";

    

?>