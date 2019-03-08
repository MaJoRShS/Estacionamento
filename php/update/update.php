<?php

include '../conexao.php';

$id = $_POST['id'];
$placa = $_POST['placa'];
$data = $_POST['data'];
$entrada = $_POST['entrada'];
$saida = $_POST['saida'];
$valor = $_POST['valor'];


    $sql = " UPDATE carros SET id = '$id', placa = '$placa', data = '$data', entrada = '$entrada', saida = '$saida', valor = '$valor' ";
    $result=mysqli_query($conexao,$sql);
  //   if ($result->num_rows > 0) {
  //     // output data of each row
  //     while($row = $result->fetch_assoc()) {
  //         // echo "deu bom";
  //         // $erro = ['sucess'];
  //     }
  // } else {
  //     // echo "0 rows";
  //     // $erro = ['erro'];
  // }
  mysqli_close($conexao);



    $_POST['id'] = $id;
    $placa = $_POST['placa'];
    $data = $_POST['data'];
    $entrada = $_POST['entrada'];
    $saida = $_POST['saida'];
    $valor = $_POST['valor'];
  echo json_encode($_POST);

?>