<?php

date_default_timezone_set('America/Sao_Paulo');


$data = date("d-m-Y");
$entrada =  "15-03-2019";           /*$_POST['entrada'];*/
$hora = date('H:i:s');

number_format($dias = $data - $entrada);

echo $dias;

$horaDia = "24:00:00";

if ($dias > 0) {
	for ($i=0; $i < $dias; $i++) { 
		$horafinal += $horaDia;
	}

}

	echo "<hr>";
echo $horaDia;
echo "<hr>";
echo "{$horafinal}:00:00 " ;

// $horaFim = $horaDia += $hora;



?>