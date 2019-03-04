<?php

    include '../conexao.php';
    $select_db = mysql_select_db("leitor"); //seleciona o banco de dados

        $id_o = $_POST['id_o'];
     $query = "delete from ouve where id_o=".$id_o;  
 
    mysql_query($query, $conexao)or die(mysql_error());
 
    if(mysql_affected_rows() == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha 
      echo "Aviso:Vinculo removido com sucesso.<br>";
      echo "<a href='../../../excluirCadastro.php'>Voltar ao Painel de Controle</a>"; //Apenas um link para retornar para o 
    }else{  
      echo "Aviso: Falha ao excluir vinculo, id de Vinculo Inexistente.<br>";
      echo "<a href='../../../excluirCadastro.php'>Voltar ao Painel de Controle</a>"; //Apenas um link para retornar para o 
     

        mysql_close($conexao); //fecha conexão com banco de dados
    }   
    ?>