<?php

date_default_timezone_set('America/Sao_Paulo');
$data = date("Y-m-d H:i:s");
$time = date('H:i:s');
$min = number_format(2.50, 2,',','.');
$data_f = $data;
$data_f = date("d-m-Y");


echo $min;
echo "<hr>";
echo $time;
echo "<hr>";
echo $data;
echo "<hr>";
echo $data_f;

















?>