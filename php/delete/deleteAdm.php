<?php

    include '../conexao.php';
    $select_db = mysql_select_db("leitor"); //seleciona o banco de dados

        $id_adm = $_POST['id_adm'];
     $query = "delete from administrador where id_adm=".$id_adm;  
 
    $res   = mysql_query($query, $conexao)or die(mysql_error());
 
    if($res){  
      echo "Aviso:Cadastro de Administrador removido com sucesso.";
    }else{  
      echo "Aviso: Falha ao excluir cadastro de administrador.";
    }   
    ?>