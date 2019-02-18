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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
      

      <h1>Estacionamento do Victor</h1>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<div class="content">
<form  method="POST" id="formEntrada"><!-- action="insert.php" -->
    <label for="placa" class="col-sm-2" maxlength="8" size="8">Placa</label>
        <input name="placa" id="placa" class="btn" placeholder="Digite a Placa Aqui" required=""><br><br> 

        <button type="submit" class="btn btn-large btn-block btn-success" id="enviar">Enviar</button>
        
    </form>
    </div>
    <div class="sucesso"></div>
    <br>

    <nav class="nav justify-content-center">
          <a class="nav-link" href="entrada.php">Entrada</a>
          <a class="nav-link" href="saida.php">Saida</a>
          <a class="nav-link" href="manual.php">Manual</a>
          <a class="nav-link" href="index.html">Home</a>
        </nav>


    <script src="jquery-3.3.1.min.js"></script>
    <script src="jquery.mask.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>

<!-- Bd@Home2019! -->