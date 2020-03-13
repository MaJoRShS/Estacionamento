<<<<<<< Updated upstream
<?php

include '../conexao.php';
date_default_timezone_set('America/Sao_Paulo');
$saida = date("H:i");
$_POST['saida'] =$saida;
$cnpj = '31.134.258/0001-04'; 
$placa = $_POST['pesquisa'];


$sql=" SELECT * FROM carr WHERE placa = '$placa' ";
$result=mysqli_query($conexao,$sql);

if ($result->affected_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $placa = $row['placa'];
        $name = $row['name'];
        $cpf = $row['cpf'];
        $data =  $row['data'];
        $entrada = $row['entrada'];
    }
} else {
    // echo "0 rows";
    $erro = 'Erro muitos registros sem saida';
}
// mysqli_close($conexao);

// $_POST['entrada'] = $entrada;


// function calcularDiferenca($hora_inicial, $hora_final) {

//     $i = 1;
//     $tempo_total;
    
//     $tempos = array($hora_final, $hora_inicial);
    
//     foreach($tempos as $tempo) {
//     $segundos = 0;
    
//     @list($h, $m, $s) = explode(':', $tempo);
    
//     $segundos += $h * 3600;
//     $segundos += $m * 60;
//     $segundos += $s;
    
//     $tempo_total[$i] = $segundos;
    
//     $i++;
//     }
//     $segundos = $tempo_total[1] - $tempo_total[2];
    
//     $horas = floor($segundos / 3600);
//     $horas = (strlen($horas) == 1) ? "0".$horas : $horas;
//     $segundos -= $horas * 3600;
//     $minutos = str_pad((floor($segundos / 60)), 2, '0', STR_PAD_LEFT);
//     $segundos -= $minutos * 60;
//     $segundos = str_pad($segundos, 2, '0', STR_PAD_LEFT);
    
//     return "$horas:$minutos:$segundos";
//     }

//     $tempo = calcularDiferenca($entrada,$saida);

    
//     if ($tempo <= '00:15:00' && $tempo <= '00:30:00') {
//         $dinheiro = '2,50';
//     } else if($tempo >= '00:30:00' && $tempo <= '00:45:00') {
//         $dinheiro = '5,00';
//     }elseif ($tempo >= '00:45:00' && $tempo <=  '00:59:00') {
//         $dinheiro = '7,50';
//     }else if ($tempo >= '00:59:00'&& $tempo <=  "01:15:00") {
//         $dinheiro = '10,00';
//     }else if($tempo >= "01:15:00" && $tempo <="01:30:00"){
//         $dinheiro = '11,00';
//     }else if($tempo >= "01:30:00" && $tempo <= "01:45:00"){
//         $dinheiro = '12,00';
//     }else if($tempo >= "01:45:00" && $tempo <= "02:00:00"){
//         $dinheiro = '13,00';
//     }else if($tempo >= "02:00:00" && $tempo <= "02:15:00"){
//         $dinheiro = '14,00';
//     }else if($tempo >= "02:15:00" && $tempo <= "02:30:00"){
//         $dinheiro = '15,00';
//     }else if($tempo >= "02:30:00" && $tempo <= "02:45:00"){
//         $dinheiro = '16,00';
//     }else if($tempo >= "02:45:00" && $tempo <= "03:00:00"){
//         $dinheiro = '17,00';
//     }else if($tempo >= "03:00:00" && $tempo <= "03:15:00"){
//         $dinheiro = '18,00';
//     }else if($tempo >= "03:15:00" && $tempo <= "03:30:00"){
//         $dinheiro = '19,00';
//     }else if($tempo >= "03:30:00" && $tempo <= "03:45:00"){
//         $dinheiro = '20,00';
//     }else if($tempo >= "03:45:00" && $tempo <= "04:00:00"){
//         $dinheiro = '21,00';
//     }else if($tempo >= "04:00:00" && $tempo <= "04:15:00"){
//         $dinheiro = '22,00';
//     }else if($tempo >= "04:15:00" && $tempo <= "04:30:00"){
//         $dinheiro = '23,00';
//     }else if($tempo >= "04:30:00" && $tempo <= "04:45:00"){
//         $dinheiro = '24,00';
//     }else if($tempo >= "04:45:00" && $tempo <= "05:00:00"){
//         $dinheiro = '25,00';
//     }else if($tempo >= "05:00:00" && $tempo <= "05:15:00"){
//         $dinheiro = '26,00';
//     }else if($tempo >= "05:15:00" && $tempo <= "05:30:00"){
//         $dinheiro = '27,00';
//     }else if($tempo >= "05:30:00" && $tempo <= "05:45:00"){
//         $dinheiro = '28,00';
//     }else if($tempo >= "05:45:00" && $tempo <= "06:00:00"){
//         $dinheiro = '29,00';
//     }else if($tempo >= "06:00:00" && $tempo <= "06:15:00"){
//         $dinheiro = '30,00';
//     }else if($tempo >= "06:15:00" && $tempo <= "06:30:00"){
//         $dinheiro = '31,00';
//     }else if($tempo >= "06:30:00" && $tempo <= "06:45:00"){
//         $dinheiro = '32,00';
//     }else if($tempo >= "06:45:00" && $tempo <= "07:00:00"){
//         $dinheiro = '33,00';
//     }else if($tempo >= "07:00:00" && $tempo <= "07:15:00"){
//         $dinheiro = '34,00';
//     }else if($tempo >= "07:15:00" && $tempo <= "07:30:00"){
//         $dinheiro = '35,00';
//     }else if($tempo >= "07:30:00" && $tempo <= "07:45:00"){
//         $dinheiro = '36,00';
//     }else{
//         $dinheiro = '37,00';
//     }
   
//    $name = ucwords($name);
    
    $_POST['id'] = $id;
    $_POST['tempo'] = $tempo;
    $_POST['valor'] = $dinheiro;
    $_POST['cnpj'] = $cnpj;
    $data_f = $data;
    $data_f = date("d-m-Y");
    $_POST['data'] = $data_f;
    $_POST['name'] = $name;
    $_POST['cpf'] = $cpf;
echo json_encode($_POST);
=======
<?php

require "../../vendor/autoload.php";
date_default_timezone_set('America/Sao_Paulo');
$saida = date("H:i");
$_POST['saida'] = $saida;
$cnpj = '31.134.258/0001-04'; 
$placa = $_POST['pesquisa'];

$select = new Select;
$result = $select->carr($placa);
$name = ucwords($name);
$entrada = $result['entrada'];
 $_POST['id'] = $result['carr'];
 $_POST['cnpj'] = $cnpj;
 $data_f = $data;
 $data_f = date("d-m-Y");
 $_POST['data'] = $data_f;
 $_POST['name'] = $result['name'];
 $_POST['cpf'] = $result['cpf'];


// $sql=" SELECT * FROM carros WHERE placa = '$placa' ";
// $result =mysqli_query($conexao,$sql);

// if ($result->affected_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         $id = $row['id'];
//         $placa = $row['placa'];
//         $name = $row['name'];
//         $cpf = $row['cpf'];
//         $data =  $row['data'];
//         $entrada = $row['entrada'];
//     }
// } else {
//     // echo "0 rows";
//     $erro = 'Erro muitos registros sem saida';
// }
// mysqli_close($conexao);


// $result['entrada'] = $entrada;

function calcularDiferenca($hora_inicial, $hora_final) {

    $i = 1;
    $tempo_total;
    
    $tempos = array($hora_final, $hora_inicial);
    
    foreach($tempos as $tempo) {
    $segundos = 0;
    
    @list($h, $m, $s) = explode(':', $tempo);
    
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

    $tempo = calcularDiferenca($entrada,$saida);

    
    if ($tempo <= '00:15:00' && $tempo <= '00:30:00') {
        $dinheiro = '2,50';
    } else if($tempo >= '00:30:00' && $tempo <= '00:45:00') {
        $dinheiro = '5,00';
    }elseif ($tempo >= '00:45:00' && $tempo <=  '00:59:00') {
        $dinheiro = '7,50';
    }else if ($tempo >= '00:59:00'&& $tempo <=  "01:15:00") {
        $dinheiro = '10,00';
    }else if($tempo >= "01:15:00" && $tempo <="01:30:00"){
        $dinheiro = '11,00';
    }else if($tempo >= "01:30:00" && $tempo <= "01:45:00"){
        $dinheiro = '12,00';
    }else if($tempo >= "01:45:00" && $tempo <= "02:00:00"){
        $dinheiro = '13,00';
    }else if($tempo >= "02:00:00" && $tempo <= "02:15:00"){
        $dinheiro = '14,00';
    }else if($tempo >= "02:15:00" && $tempo <= "02:30:00"){
        $dinheiro = '15,00';
    }else if($tempo >= "02:30:00" && $tempo <= "02:45:00"){
        $dinheiro = '16,00';
    }else if($tempo >= "02:45:00" && $tempo <= "03:00:00"){
        $dinheiro = '17,00';
    }else if($tempo >= "03:00:00" && $tempo <= "03:15:00"){
        $dinheiro = '18,00';
    }else if($tempo >= "03:15:00" && $tempo <= "03:30:00"){
        $dinheiro = '19,00';
    }else if($tempo >= "03:30:00" && $tempo <= "03:45:00"){
        $dinheiro = '20,00';
    }else if($tempo >= "03:45:00" && $tempo <= "04:00:00"){
        $dinheiro = '21,00';
    }else if($tempo >= "04:00:00" && $tempo <= "04:15:00"){
        $dinheiro = '22,00';
    }else if($tempo >= "04:15:00" && $tempo <= "04:30:00"){
        $dinheiro = '23,00';
    }else if($tempo >= "04:30:00" && $tempo <= "04:45:00"){
        $dinheiro = '24,00';
    }else if($tempo >= "04:45:00" && $tempo <= "05:00:00"){
        $dinheiro = '25,00';
    }else if($tempo >= "05:00:00" && $tempo <= "05:15:00"){
        $dinheiro = '26,00';
    }else if($tempo >= "05:15:00" && $tempo <= "05:30:00"){
        $dinheiro = '27,00';
    }else if($tempo >= "05:30:00" && $tempo <= "05:45:00"){
        $dinheiro = '28,00';
    }else if($tempo >= "05:45:00" && $tempo <= "06:00:00"){
        $dinheiro = '29,00';
    }else if($tempo >= "06:00:00" && $tempo <= "06:15:00"){
        $dinheiro = '30,00';
    }else if($tempo >= "06:15:00" && $tempo <= "06:30:00"){
        $dinheiro = '31,00';
    }else if($tempo >= "06:30:00" && $tempo <= "06:45:00"){
        $dinheiro = '32,00';
    }else if($tempo >= "06:45:00" && $tempo <= "07:00:00"){
        $dinheiro = '33,00';
    }else if($tempo >= "07:00:00" && $tempo <= "07:15:00"){
        $dinheiro = '34,00';
    }else if($tempo >= "07:15:00" && $tempo <= "07:30:00"){
        $dinheiro = '35,00';
    }else if($tempo >= "07:30:00" && $tempo <= "07:45:00"){
        $dinheiro = '36,00';
    }else{
        $dinheiro = '37,00';
    }
   
    $_POST['tempo'] = $tempo;
    $_POST['valor'] = $dinheiro;
    $_POST['entrada'] = $entrada;
echo json_encode($_POST);
>>>>>>> Stashed changes
?>