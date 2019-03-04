<?php

    include '../conexao.php';
    $select_db = mysql_select_db("leitor"); //seleciona o banco de dados

    $id_li = $_POST['id_li'];
     $query = "delete from livros where id_li=".$id_li;  
 
    $res   = mysql_query($query, $conexao)or die(mysql_error());
 
    if($res){  
      echo "Aviso:Cadastro de Livro removido com sucesso.";
    }else{  
      echo "Aviso: Falha ao excluir cadastro de Livro.";
    }    
      
    ?>