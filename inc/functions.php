<?php 
	define('ARQUIVO','foto.json');


	function errosNoPost(){
		$erros =[];
		if(!isset($_POST['inpProduto']) || $_POST['inpProduto']==''){
			$erros[] = 'errNome';
		}

		if(!isset($_POST['inpDescricao']) || $_POST['inpDescricao']==''){
			$erros[] = 'errEmail';
		}

		if(!isset($_POST['inpValor']) || $_POST['inpValor']==''){
			$erros[] = 'errSenha';
		}
		
		return $erros;
	}

	function getFoto(){
		$json = file_get_contents(ARQUIVO);
		$foto = json_decode($json,true);
		return $foto;
	}
	
		function addFoto($foto){

			 $foto = getFoto();
	
			$foto[] = [
				'foto' => $foto
			];
			
			$json = json_encode($foto);
	
			file_put_contents(ARQUIVO,$json); 
		}

?>