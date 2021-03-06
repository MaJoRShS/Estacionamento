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


<div class="content">
<form  method="POST" id="formManual"><!-- action="insert.php" -->
    <label for="placa" class="col-sm-2" maxlength="8" size="8">Placa</label>
        <input name="placa" id="placa" class="btn" placeholder="Digite a Placa Aqui" required=""><br><br> 

        <label for="input-id" class="col-sm-2">Data</label>
        <input name="data" id="inputdate" class="btn" readonly value="<?php echo $data;?>"><br> <br>        

        <label for="input-id" class="col-sm-2">Entrada</label>
        <input type="time" name="entrada" id="entrada" class="btn">

        <label for="input-id" class="col-sm-2">Saida</label>
        <input type="time" name="saida" id="saida" class="btn"><br><br> 

        <label for="input-id" class="col-sm-2">Valor</label>
        <input type="text" name="dinheiro" id="dinheiro" size="5" class="btn" Placeholder="R$"><br><br> 
        
        <label for="input-id" class="col-sm-2">CNPJ</label>
        <input name="cnpj" id="cnpj" value="99.999.999/9999-99" readonly style="background-color:#cecece;" class="btn"><br> <br> 

        <button type="submit" class="btn btn-large btn-block btn-success" id="enviar">Enviar</button>
        
    </form>
    </div>
    <div class="sucesso col-6 alert alert-dismissible fade show" role="alert"></div>
    <br>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

<!-- Bd@Home2019! -->