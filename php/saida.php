<?php
date_default_timezone_set('America/Sao_Paulo');
$data = date("Y-d-m");
$hora = '12:00';
$saida = date("H:i");
$cnpj = '99.999.999/9999-99';


function calcularDiferenca($hora_inicial, $hora_final) {

    $i = 1;
    $tempo_total;
    
    $tempos = array($hora_final, $hora_inicial);
    
    foreach($tempos as $tempo) {
    $segundos = 0;
    
    list($h, $m, $s) = explode(':', $tempo);
    
    $segundos += $h * 3600;
    $segundos += $m * 60;
    $segundos += $s;
    
    $tempo_total[$i] = $segundos;
    
    $i++;
    }
    $segundos = $tempo_total[1] - $tempo_total[2];
    
    $horas = floor($segundos / 3600);
    $horas = (strlen($horas) == 1) ? "0".$horas : $horas;
    $segundos -= $horas * 3600;
    $minutos = str_pad((floor($segundos / 60)), 2, '0', STR_PAD_LEFT);
    $segundos -= $minutos * 60;
    $segundos = str_pad($segundos, 2, '0', STR_PAD_LEFT);
    
    return "$horas:$minutos:$segundos";
    }

    $tempo = calcularDiferenca($hora,$saida);

    
if ($tempo <= '00:15:00') {
    $dinheiro = '2,50';
} else if($tempo <= '00:30:00') {
    $dinheiro = '5,00';
}elseif ($tempo <= '00:45:00') {
    $dinheiro = '7,50';
}else if ($tempo <= '00:59:00') {
    $dinheiro = '10,00';
}else{
    $dinheiro = '15,00';
}



$placa    = $_POST['placa'];
$_POST['data'] = $data;
$_POST['hentrada'] = $hora;
$_POST['hsaida'] =$saida;
$_POST['cnpj'] = $cnpj;
$_POST['tempo'] = $tempo;
$_POST['dinheiro'] = $dinheiro;


echo json_encode($_POST);