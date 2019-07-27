<?php
   
    include '../conexao.php';
    date_default_timezone_set('America/Sao_Paulo');
    header('Content-Type: text/html; charset=utf-8');
    
    // $placa = $_POST['placa'];
    // $name = $_POST['name'];
    // $cpf = $_POST['cpf'];
    // $data = date("Y-m-d");
    // $hora = date("H:i");
    // $_POST['data'] = $data;
    // $_POST['entrada'] = $hora;
    // $cnpj = '31.134.258/0001-04';
    
    
    // $carr = " INSERT INTO carr(id, placa, name, cpf,  data, entrada) 
    // VALUES (null,'$placa','$name','$cpf','$data','$hora') ";
    
    // $service = " INSERT INTO service() 
    // VALUES () ";
    
    // $links = " INSERT INTO links() 
    // VALUES () ";
    
    // if ($conexao->query($carr) === TRUE) {
    // // echo "New record created successfully";
    // } else {
    // // echo "Error: " . $sql . "<br>" . $conexao->error;
    // }$conexao->close();
    // $name = ucwords($name);

    // $_POST['name'] = $name;
    // $_POST['data'] = date("d/m/Y");
    // $_POST['cnpj'] = $cnpj;
    
    $sql=" SELECT * FROM services";
    $result=mysqli_query($conexao,$sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id    = $row['service'];
            $name  = $row['name'];
            $value = $row['value'];
        }
    } else {
        // echo "0 rows";
        $erro = 'Erro muitos registros sem saida';
    }
    mysqli_close($conexao);
       
    

   $_POST['id'] = $id;
   $_POST['name'] = $name;
   $_POST['value'] = $value;

    echo json_encode($_POST);
?>