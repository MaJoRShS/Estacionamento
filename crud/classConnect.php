<<<<<<< Updated upstream
<?php

define("user", "root");
define("pass", "Bd@Home2020!");

class Connection{

    public static function connect()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=estacionamento', user, pass);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        return $conn;
    }

}
=======
<?php

define("user", "root");
define("pass", "Bd@Home2020!");

class Connection{

    public static function connect()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=estacionamento', user, pass);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        return $conn;
    }

}
>>>>>>> Stashed changes
