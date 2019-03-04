<?php

//chama o arquivo de conexão com o bd
include '../conexao.php';
mysql_select_db("leitor");  


// declaração de variáveis
	$id_adm       = $_POST['id_adm'];
    $name         = $_POST['name'];
    $mail         = $_POST['mail'];
    $senha        = md5(md5($_POST['senha']));
    $passconfirm  = md5(md5($_POST['passconfirm']));
 

$up = mysql_query("UPDATE `administrador` SET `name` = '$name', `mail` = '$mail', `senha` = '$senha', `passconfirm` = '$passconfirm' WHERE `administrador`.`id_adm` = $id_adm");

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