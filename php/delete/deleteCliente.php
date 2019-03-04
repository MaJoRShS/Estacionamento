<?php

    include '../conexao.php';
    $select_db = mysql_select_db("leitor"); //seleciona o banco de dados
    
        $id_usu = $_POST['id_usu'];
     $query = "delete from usuario where id_usu=".$id_usu;  
 
    $res   = mysql_query($query, $conexao)or die(mysql_error());
 
    if($res){  
      echo "Aviso:Cadastro de Cliente removido com sucesso.";
    }else{  
      echo "Aviso: Falha ao excluir cadastro de cliente.";
    }   
      
    ?>