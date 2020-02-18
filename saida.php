<?php 

date_default_timezone_set('America/Sao_Paulo');
$data = date("d/m/Y");
require "vendor/autoload.php";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Estacionamento Victor</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
      

      <h1>Estacionamento do Victor</h1>
      
      
      
      <nav class="nav justify-content-center">
          <a class="nav-link" href="entrada.php">Entrada</a>
          <a class="nav-link" href="saida.php">Saida</a>
          <a class="nav-link" href="manual.php">Manual</a>
          <a class="nav-link" href="index.php">Home</a>
        </nav>
<br><br>

<form  method="post" id="consulta" action="crud/classSelect.php">
    <label for="input-id" class="col-sm-2">Placa</label>
    <input name="placa" id="placa" class="btn" placeholder="Digite a Placa Aqui" required="">
    <button type="button" class="btn btn-large btn-large  btn-success">Pesquisar</button>
</form>

<div class="content" style="display:none;">
<form  method="POST" id="formSaida">
    <label for="placa" class="col-sm-2" maxlength="8" size="8">Placa</label>
    <input name="id" id="id" class="btn" hidden>
        <input name="placa" id="placa" class="btn" placeholder="Digite a Placa Aqui" required=""><br><br> 

        <label for="input-id" class="col-sm-2">Data</label>
        <input name="data" id="inputdate" class="btn" ><br> <br>        

        <label for="input-id" class="col-sm-2">Cliente</label>
        <input type="text" name="name" id="name" class="btn col-sm-8"><br> <br>

        <label for="input-id" class="col-sm-2">CPF</label>
        <input type="text" name="cpf" id="cpf" class="btn"><br> <br>

        <label for="input-id" class="col-sm-2">Entrada</label>
        <input type="time" name="entrada" id="entrada" class="btn">

        <label for="input-id" class="col-sm-2">Saida</label>
        <input type="time" name="saida" id="saida" class="btn"><br><br> 

        <label for="input-id" class="col-sm-2">Valor</label>
        <input type="text" name="dinheiro" id="dinheiro" size="5" class="btn" Placeholder="R$"><br><br> 
        
        <label for="input-id" class="col-sm-2">CNPJ</label>
        <input name="cnpj" id="cnpj"readonly style="background-color:#cecece;" class="btn"><br> <br> 
        
        <?php
    $select = new Select;
    $select->listServices();
    // $select->Carrs();



  ?>
        <button type="submit" class="btn btn-large btn-block btn-success" id="enviar">Salvar</button>
        
    </form>
    </div>
    <div class="sucesso col-12 alert alert-dismissible fade show" id="sucesso" role="alert">
    </div>
    <br>
    <br> 


    <button onclick="printDiv('sucesso')" class="hide">Imprimir</button>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
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