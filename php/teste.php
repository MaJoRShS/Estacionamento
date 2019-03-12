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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
	</script>
<h1> do not print this </h1>

<div id='printMe'>
  Print this only 
</div>

<button onclick="printDiv('printMe')">Print only the above div</button>
</body>
</html>