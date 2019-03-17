<?php

include '../conexao.php';

$id = $_POST['id'];
$saida = $_POST['saida'];
$valor = $_POST['dinheiro'];


    $sql = " UPDATE carros SET saida = '$saida', valor = '$valor' WHERE id = '$id' ";
    $result=mysqli_query($conexao,$sql);
    if (mysqli_query($conexao, $sql)) {
      // echo "Record updated successfully";
   } else {
      /* echo "Error updating record: " . */mysqli_error($conexao);
   }
  mysqli_close($conexao);

    $_POST['id'] = $id;
    $placa = $_POST['placa'];
    $data = $_POST['data'];
    $entrada = $_POST['entrada'];
    $saida = $_POST['saida'];
    $valor = $_POST['dinheiro'];
  echo json_encode($_POST);

?>