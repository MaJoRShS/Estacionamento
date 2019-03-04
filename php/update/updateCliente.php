<?php

//chama o arquivo de conexão com o bd
include '../conexao.php';
mysql_select_db("leitor");  


// declaração de variáveis
	$id_usu       = $_POST['id_usu'];
    $name         = $_POST['name_usu'];
    $mail         = $_POST['mail'];
    $senha        = md5(md5($_POST['senha']));
    $passconfirm  = md5(md5($_POST['passconfirm']));
 

$up = mysql_query("UPDATE `usuario` SET `name_usu` = '$name', `mail` = '$mail', `senha` = '$senha', `passconfirm` = '$passconfirm' WHERE `usuario`.`id_usu` = $id_usu");

mysql_query($up,$conexao);
 
if(mysql_affected_rows() ){
  echo "Aviso: Cadastro Atualizado com Sucesso!<br>";
echo "<a href='../../../formularios.php'>Voltar ao Painel de Controle</a>";
}else{
  echo "Aviso: Erro ao Atualizar Cadastro!<br>";
echo "<a href='../../../formularios.php'>Voltar ao Painel de Controle</a>";
}

mysql_close($conexao);

?>