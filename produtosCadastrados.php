<?php
   // include('./foto.json');
  //  include('.inserir.php');
    include('./inc/functions.php');

$conexao = mysqli_connect("localhost", "root", "", "desafiodh");
if ($conexao){
    echo "Conectado com Sucesso!";
}else{
    echo "Erro na Conexão";
    }
?>
 <table width="350">
     <th width="50">Nome do produto:</th>
     <th width="100"> Valor:</th>
     <th width="100"> Descricao:</th>
     <th width="100"> Foto</th>
 </table>
<?php
$resultado = mysqli_query($conexao, "select * from cadastroprodutos");
while ($lista = mysqli_fetch_assoc($resultado)){ ?>
   
        <table border="1" width="400">
        <tr>
            <td width="100"> <?php echo $lista["Nome_Produto"] ?> </td>
            <td width="100"> <?php echo $lista["Preco"] ?> </td>
            <td width="100"> <?php echo $lista["Descricao_Produto"] ?> </td>
            <td width="100"> <img src="<?php echo $lista['url_foto'] ?>" alt="seraqvai" style="width:50px;border-radius:5px;object-fit:cover;"> </td>
            
        </tr>
    </table>
<?php
}
?>
<br><br> <a href="cadastro.php"> Voltar</a>
