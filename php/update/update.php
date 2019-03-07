<?php

include '../conexao.php';
mysql_select_db("leitor");  


    $sql = " UPDATE carros SET placa = '$placa',data = '$data', entrada = '$entrada', saida = '$saida', valor = '$valor' ";
    
    if(mysql_affected_rows() > 0){
    echo "Sucesso: Atualizado corretamente!";
    }else{
    echo "Aviso: Não foi atualizado!";
    }

    mysqli_close($con);

  echo json_encode($_POST);

?>