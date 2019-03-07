WorkBench
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="estacionamento";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();


$query = "SELECT * from carros";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($field1, $field2);
    while ($stmt->fetch()) {
        //printf("%s, %s\n", $field1, $field2);
    }
    $stmt->close();
}



Site PHP
<?php

$link = mysqli_connect("localhost:3306", "root", "Bd@Home2019!", "estacionamento");

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "<br>Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "<br>Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
    echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

    mysqli_close($link);


  //PDO
    // $servername = "localhost";
    // $username = "username";
    // $password = "password";
    // $dbname = "myDBPDO";
    
    // try {
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //     // set the PDO error mode to exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    //     VALUES ('John', 'Doe', 'john@example.com')";
    //     // use exec() because no results are returned
    //     $conn->exec($sql);
    //     echo "New record created successfully";
    //     }
    // catch(PDOException $e)
    //     {
    //     echo $sql . "<br>" . $e->getMessage();
    //     }
    
    // $conn = null;
    ?>
    