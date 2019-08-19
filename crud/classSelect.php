<?php

class Select extends Connection
{

    public function Services()
    {
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

    public function Service($service)
    {
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

    public function Carrs()
    {

        $conn = self::connect();
        $result = $conn->query("SELECT * from carr");

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

    public function Carr($placa)
    {
        $conn = self::connect();
        $result = $conn->prepare("SELECT * from carr where placa = :placa LIMIT 25");
        $result->bindValue(':placa', $placa);
        $result->execute();
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
            echo "</tbody></table>";} else {
            print "$result->getMessage()";
        }
    }

    public function Last()
    {
        $conn = self::connect();
        $result = $conn->query("SELECT * from carr WHERE saida IS NULL AND valor IS NULL");
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
    }
}
