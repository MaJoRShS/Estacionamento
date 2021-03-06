<?php
class Select extends Connection
{
    public $placa;
    // public $name;
    // public $cpf;   

 //Classes Select completo das tabelas usada em relatorios
    public function carrs(){
        $conn = self::connect();
        $result = $conn->query("SELECT * from carr WHERE saida is null");

        if ($result->rowCount() >= 1) {
            echo "<table class='table table-dark table-striped'><thead><tr><th scope='col'>ID</th><th scope='col'>Placa</th><th scope='col'>nome</th><th scope='col'>CPF</th><th scope='col'>Data</th><th scope='col'>Entrada</th><th scope='col'>Saida</th><th scope='col'>Valor</th></tr></thead><tbody></tr>";
            while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                echo "<td>{$row->carr}</td>";
                echo "<td>{$row->placa}</td>";
                echo "<td>{$row->name}</td>";
                echo "<td>{$row->cpf}</td>";
                echo "<td>{$row->data}</td>";
                echo "<td>{$row->entrada}</td>";
                echo "<td>{$row->saida}</td>";
                echo "<td>{$row->valor}</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            print "$result->getMessage()";
        }
    }

    public function services()    {
        $conn = self::connect();
        $result = $conn->query("SELECT * from services");
        $result->execute();

        if ($result->rowCount() >= 1) {
            echo "<table class='table table-dark table-striped'><thead><tr><th scope='col'>ID</th><th scope='col'>Serviço</th><th scope='col'>Valor</th></tr></thead><tbody><tr>";
            while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                echo "<td>{$row->service}</td>";
                echo "<td>{$row->name}</td>";
                echo "<td>{$row->value}</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            $result->getMessage();
            echo $result;
        }
    }


//Classes que retornam um registro apenas
    public function service($service)    {
        $conn = self::connect();
        $result = $conn->prepare('SELECT * FROM services WHERE service = :service ');
        $result->bindValue(':service', $service);
        $result->execute();

        if ($result->rowCount() >= 1) {
            echo "<table class='table table-dark table-striped'><thead><tr><th scope='col'>ID</th><th scope='col'>Serviço</th><th scope='col'>Valor</th></tr></thead><tbody><tr>";
            while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                echo "<td>{$row->service}</td>";
                echo "<td>{$row->name}</td>";
                echo "<td>{$row->value}</td></tr>";
            }
            echo "</tbody></table>";

        } else {
            print "$result->getMessage()";
        }

    }

   

    public function carr($placa)
    {
        $conn = self::connect();
        $result = $conn->prepare("SELECT * from carr where placa = :placa and saida is null");
        $result->bindValue(':placa', $placa);
        $result->execute();
        if ($result->rowCount() >= 1) {
            return $row = $result->fetch(PDO::FETCH_ASSOC);
        }else {
            print "$result->getMessage()";
        }
    }

    public function last()
    {
        $conn = self::connect();
        $result = $conn->query("SELECT carr, service from carr ORDER BY carr DESC LIMIT 1");
        $result->execute();

        if ($result->rowCount() >= 1) {
            while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                $carr = $row->carr;
                $service = $row->service;

                $conn = self::connect();
                $insert = $conn->prepare("INSERT INTO links (carr, service) VALUES  (:carr, :service)");
                $insert->bindParam(':carr', $carr);
                $insert->bindParam(':service', $service);
                $insert->execute();
            }
        }else{
            $msg ="Erro";
        }
    }




    public function listServices()
    {
        $conn = self::connect();
        $result = $conn->query("SELECT * from services");
        $result->execute();

        if ($result->rowCount() >= 1) {
            echo "<label for='service' class='col-sm-12'>Serviços</label>";
            while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                echo "<div class='input-group mb-4 col-lg-12'><div class='input-group-prepend'><div class='input-group-text'><input type='checkbox' name='service' value='{$row->service}' aria-label='Chebox com Serviços oferecidos'></div></div><input type='text' class='form-control col-lg' aria-label='Input text com serviços' value='{$row->name} - {$row->value}' ></div>";}
        } else {
            $result->getMessage();
            echo $result;
        }
    }

}
