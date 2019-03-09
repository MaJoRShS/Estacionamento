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
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
      

      <h1>Estacionamento do Victor</h1>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<br><br>

<form  method="post" id="consulta">
    <label for="input-id" class="col-sm-2">Placa</label>
    <input name="pesquisa" id="pesquisa" class="btn" placeholder="Digite a Placa Aqui" required="">
    <button type="button" class="btn btn-large btn-large  btn-success">Pesquisar</button>
</form>

<div class="content" style="display:none;">
<form  method="POST" id="formSaida"><!-- action="insert.php" -->
    <label for="placa" class="col-sm-2" maxlength="8" size="8">Placa</label>
    <input name="id" id="id" class="btn" hidden>
        <input name="placa" id="placa" class="btn" placeholder="Digite a Placa Aqui" required=""><br><br> 

        <label for="input-id" class="col-sm-2">Data</label>
        <input name="data" id="inputdate" class="btn" ><br> <br>        

        <label for="input-id" class="col-sm-2">Entrada</label>
        <input type="time" name="hentrada" id="hentrada" class="btn">

        <label for="input-id" class="col-sm-2">Saida</label>
        <input type="time" name="hsaida" id="hsaida" class="btn"><br><br> 

        <label for="input-id" class="col-sm-2">Valor</label>
        <input type="text" name="dinheiro" id="dinheiro" size="5" class="btn" Placeholder="R$"><br><br> 
        
        <label for="input-id" class="col-sm-2">CNPJ</label>
        <input name="cnpj" id="cnpj"readonly style="background-color:#cecece;" class="btn"><br> <br> 
        <button type="submit" class="btn btn-large btn-block btn-success" id="enviar">Salvar</button>
        
    </form>
    </div>
    <div class="sucesso col-6 alert alert-dismissible fade show" role="alert">
    </div>
    <br>
    

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
  </body>
</html>

<!-- Bd@Home2019! -->