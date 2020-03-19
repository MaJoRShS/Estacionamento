<?php
   
   require "../../vendor/autoload.php";
    date_default_timezone_set('America/Sao_Paulo');
    header('Content-Type: text/html; charset=utf-8');
    
    $placa = $_POST['placa'];
    $name = $_POST['name'];
    $cpf = $_POST['cpf'];
    $service = $_POST['service'];
    $data = date("Y-m-d H:i:s");
    $hora = date("H:i");
    $cnpj = '31.134.258/0001-04';
    
    
    $name = ucwords($name);

    $insert = new Insert;
    $insert->entrada($cpf, $data, $hora, $name, $placa, $service); 

    $select = new Select;
    $select->last();

    

    $_POST['data'] = $data;
    $_POST['cnpj'] = $cnpj;

    echo json_encode($_POST);
?>