<?php 

try {

  $username = 'root';
  $password = '';
  $pdo = new PDO('mysql:host=localhost;dbname=estacionamento', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('INSERT INTO carros (id , placa, data, entrada) VALUES(:id, :placa, :data, :entrada)');
//   $stmt->execute(array(
//     ':nome' => 'Ricardo Arrigoni'
//   ));
   
  echo $stmt->rowCount(); 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
   ?>