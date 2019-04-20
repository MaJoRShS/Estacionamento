<?php 

date_default_timezone_set('America/Sao_Paulo');
$data = date("d/m/Y");

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Estacionamento Victor</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="\css\bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
      

      <h1>Estacionamento do Victor</h1>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<div class="content">
<form  method="POST" id="formEntrada"><!-- action="insert.php" -->
    <label for="placa" class="col-sm-2" maxlength="8" size="8">Placa</label><br>
        <input name="placa" id="placa" class="btn" placeholder="Digite a Placa aqui" required=""><br><br> 
        
        <label for="placa" class="col-sm-6">Nome do Cliente</label><br>
        <input name="name" id="name" class="btn" placeholder="Digite o Nome Aqui" required=""><br><br>
        
        <label for="placa" class="col-sm-6">CPF do Cliente</label><br>
        <input name="cpf" id="cpf" class="btn" placeholder="Digite o CPF Aqui" required=""><br><br>
        
        
        <button type="submit" class="btn btn-large btn-block btn-success" id="enviar">Enviar</button>
        
    </form>
    </div>
    <div class="sucesso col-6 alert alert-dismissible fade show" id="sucesso" role="alert">
    </div>
    <br>
    <br> 
    <button onclick="printDiv('sucesso')" class="hide">Imprimir</button>

    <nav class="nav justify-content-center">
          <a class="nav-link" href="entrada.php">Entrada</a>
          <a class="nav-link" href="saida.php">Saida</a>
          <a class="nav-link" href="manual.php">Manual</a>
          <a class="nav-link" href="index.html">Home</a>
        </nav>


    <script src="jquery-3.3.1.min.js"></script>
    <script src="jquery.mask.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
    </script>
  </body>
</html>