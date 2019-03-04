<?php
//chama o arquivo de conexão com o bd
include '../conexao.php';

mysql_select_db("leitor"); 
 
// declaração de variáveis
	$id_li      = $_POST['id_li'];
    $nome    = $_POST['nome'];
    $autor   = $_POST['autor'];
    $ano_lan = $_POST['ano_lan'];
    $ISBN    = $_POST['ISBN'];
 
$up = mysql_query("UPDATE `livros` SET `nome` = '$nome', `autor` = '$autor', `ano_lan` = '$ano_lan', `ISBN` = '$ISBN' WHERE `livros`.`id_li` = $id_li");


mysql_query($up,$conexao);
 
if(mysql_affected_rows() ){
  	echo "Aviso: Livro Atualizado corretamente!<br>";
echo "<a href='../../../formularios.php'>Voltar ao Painel de Controle</a>";
}else{
  echo "Aviso: Erro ao Atualizar Cadastro!<br>";
echo "<a href='../../../formularios.php'>Voltar ao Painel de Controle</a>";
}
 
mysql_close($conexao);
?>