	<?php

	while($linha = mysql_fetch_array($resultado)) //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
	{ //Inicia o loop
	?>
	<a href="deleteCliente.php?id=<?php echo $linha['id_usu'] ?>">
	<?php
	echo $linha[‘nome’]; // Mostra o valor do registro dentro do loop
	?>
	</a>
	<?php
	echo "<br />"; 
	} // Retorna para o início do loop caso existam mais registros a serem mostrados

	mysql_close($conexao ); // Fechamos a conexão com o banco de dados
	?>