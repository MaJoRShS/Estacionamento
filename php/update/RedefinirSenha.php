<?php

//chama o arquivo de conexão com o bd
include '../conexao.php';
mysql_select_db("leitor");  


// declaração de variáveis
    $mail         = $_POST['mail'];
    $senha        = md5(md5($_POST['senha']));
    $passconfirm  = md5(md5($_POST['passconfirm']));

 

$up = mysql_query("UPDATE 'leitor'.'usuario' SET 'senha' = '$senha', 'passconfirm' = '$passconfirm' WHERE 'usuario'.'mail' = $mail");

mysql_query($up,$conexao);
 
if(mysql_affected_rows() ){
  echo "Aviso: Senha Atualizada com Sucesso!<br>";
echo "<a href='../../../login.php'>Fazer o Login</a>";
}else{
  echo "Aviso: Erro ao Atualizar Senha!<br>";
echo "<a href='../../../recover.php'>Tentar Novamente</a>";
}

mysql_close($conexao);




?>