<?php

    include '../conexao.php';
    date_default_timezone_set('America/Sao_Paulo');

    $placa = $_POST['placa'];
    $data = $_POST['data'];
    $hora = $_POST['entrada'];
    $saida = $_POST['saida'];
    $valor = $_POST['dinheiro'];

    $data = date("Y-m-d");

    $sql = " INSERT INTO carros(id, placa, data, entrada, saida, valor) 
    VALUES (null,'$placa','$data','$hora','$saida','$valor') ";

    if ($conexao->query($sql) === TRUE) {
    // echo "New record created successfully";
    } else {
    // echo "Error: " . $sql . "<br>" . $conexao->error;
    }$conexao->close();

    echo json_encode($_POST);

?>