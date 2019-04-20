<?php
   
    include '../conexao.php';
    date_default_timezone_set('America/Sao_Paulo');
    
    $placa = $_POST['placa'];
    $name = $_POST['name'];
    $cpf = $_POST['cpf'];
    $data = date("Y-m-d");
    $hora = date("H:i");
    $_POST['data'] = $data;
    $_POST['entrada'] = $hora;
    $cnpj = '31.134.258/0001-04';
    
    
    $sql = " INSERT INTO carros(id, placa, name, cpf,  data, entrada) 
    VALUES (null,'$placa','$name','$cpf','$data','$hora') ";
    
    if ($conexao->query($sql) === TRUE) {
    // echo "New record created successfully";
    } else {
    // echo "Error: " . $sql . "<br>" . $conexao->error;
    }$conexao->close();
    $name = ucwords($name);

    $_POST['name'] = $name;
    $_POST['data'] = date("d/m/Y");
    $_POST['cnpj'] = $cnpj;
    
    
    
    echo json_encode($_POST);
?>