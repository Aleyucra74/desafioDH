<?php
    include('./inc/functions.php');
	
	if($_POST){
		
		// Verificando o post
		$erros = errosNoPost();

		if($_FILES['inpImagem']){
			if($_FILES['inpImagem']['error'] == 0){
				//salvando a foto de forma descente
				move_uploaded_file($_FILES['inpImagem']['tmp_name'],'./fotos/'.$_FILES['inpImagem']['name']);
				
				$arquivo_def = './fotos/'.$_FILES['inpImagem']['name'];
			}else {
				$erros[] = 'errUpload';
			}
		}

	} else {

		// Garantindo que um vetor de erros exista
		// ainda que vazio quando não houver POST
		$erros = [];

	}

	// errNome será true se o campo nome for inválido e false se o campo estiver ok. 
	$errNome = in_array('errNome',$erros);

	// errEmail será true se o campo email for inválido e false se o campo estiver ok. 
	$errEmail = in_array('errEmail',$erros);

	// errSenha será true se o campo email for inválido e false se o campo estiver ok. 
	$errSenha = in_array('errSenha',$erros);

	// errConf será true se o campo email for inválido e false se o campo estiver ok. 
	$errConf = in_array('errConf',$erros);

	//$foto = getFoto();
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
    <h2>Cadastre o Produto</h2>
    <p>preencha os dados para Cadastrar</p>
    <form action="inserir.php" method="post" enctype="multipart/form-data">
        <div class="form-group ">
            <label>Nome do produto:<sup>*</sup></label>
            <input type="text" name="inpProduto" class="form-control" value="" required>
            <span class="help-block"></span>
        </div>
        <div class="form-group ">
            <label>Descrição do produto:<sup>*</sup></label>
            <input type="text" name="inpDescricao" class="form-control" value="" required>
            <span class="help-block"></span>
        </div>
        <div class="form-group ">
            <label>Valor:<sup>*</sup></label>
            <input type="number" name="inpValor" class="form-control" value="" required>
            <span class="help-block"></span>
        </div>
        <div class="form-group ">
            <label>Imagem:<sup>*</sup></label>
            <input type="file" name="inpImagem" class="form-control" value="">
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Enviar">
            <input type="reset" class="btn btn-default" value="Resetar campos">
        </div>
        <p>Vizualize os produtos cadastrados<a href="produtosCadastrados.php" target="_blank"> entre aqui</a>.</p>
    </form>
</div>
</body>
</html>