<?php

include '../conexao.php';

$id = $_POST['id'];
$saida = $_POST['hsaida'];
$valor = $_POST['dinheiro'];


    $sql = " UPDATE carros SET saida = '$saida', valor = '$valor' WHERE id = '$id' ";
    $result=mysqli_query($conexao,$sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $success = ['Sucesso'];
      }
  } else {
      // echo "0 rows";
      $erro = ['erro'];
  }
  mysqli_close($conexao);

    $_POST['id'] = $id;
    $placa = $_POST['placa'];
    $data = $_POST['data'];
    $entrada = $_POST['entrada'];
    $saida = $_POST['saida'];
    $valor = $_POST['valor'];
  echo json_encode($_POST);

?>