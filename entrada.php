<?php
// require_once 'php/conexao.php';
require "vendor/autoload.php";
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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>


  <h1>Estacionamento do Victor</h1>

  <div class="content">
    <form method="POST" id="formEntrada" class="form-group row">
      <!-- action="insert.php" -->
      <label for="placa" class="col-sm-12" maxlength="8" size="8">Placa
        <input name="placa" id="placa" class="btn col-sm-12" placeholder="Digite a Placa aqui" required="">
      </label><br>

      <label for="placa" class="col-sm-12">Nome do Cliente
        <input name="name" id="name" class="btn col-sm-12" placeholder="Digite o Nome Aqui" required="">
      </label><br>

      <label for="placa" class="col-sm-12">CPF do Cliente
        <input name="cpf" id="cpf" class="btn col-sm-12" placeholder="Digite o CPF Aqui" required="">
      </label><br>

      <?php

  // $service =1;
    $select = new Select;
    $select->list();
    ?>

        <h5 class="col-sm-12" name="more" id="more">+</h5>


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


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/jquery.mask.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
    }
  </script>
</body>

</html>