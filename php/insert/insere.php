<?php
   
    include '../conexao.php';
    date_default_timezone_set('America/Sao_Paulo');
    
    $placa = $_POST['placa'];
    $data = date("Y-m-d");
    $hora = date("H:i");
    $_POST['data'] = $data;
    $_POST['entrada'] = $hora;
    
    $sql = " INSERT INTO carros(id, placa, data, entrada) 
    VALUES (null,'$placa','$data','$hora') ";
    
    if ($conexao->query($sql) === TRUE) {
    // echo "New record created successfully";
    } else {
    // echo "Error: " . $sql . "<br>" . $conexao->error;
    }$conexao->close();

    echo json_encode($_POST);
?>