<?php
     
    date_default_timezone_set('America/Sao_Paulo');
    $data = date("m/d/Y");
    $hora = date("H:i");

    $placa    = $_POST['placa'];
    $_POST['data'] = $data;
    $_POST['hentrada'] = $hora;



echo json_encode($_POST);
?>