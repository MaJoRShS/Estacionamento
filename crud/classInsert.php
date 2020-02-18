<?php

class Insert extends Connection
{

    public $placa;
    public $name;
    public $cpf;
    public $service;
    
    public function entrada($cpf, $data, $entrada, $name, $placa, $service)
    {

        $conn = self::connect();
        $insert = $conn->prepare("INSERT INTO carr (cpf, data, entrada, name, placa, service) VALUES  (:cpf, :data, :entrada, :name, :placa, :service)");
        $insert->bindParam(':placa', $placa);
        $insert->bindParam(':name', $name);
        $insert->bindParam(':cpf', $cpf);
        $insert->bindParam(':data', $data);
        $insert->bindParam(':entrada', $entrada);
        $insert->bindParam(':service', $service);
        $insert->execute();

        if ($insert->rowCount() >= 1) {
            return $insert;
            // echo "<br><p class='btn bg-success col-lg-12'>Carro cadastrado com sucesso</p>";
            // echo "<table class='table table-dark table-striped'><thead><tr><th scope='col'>Placa</th><th scope='col'>nome</th><th scope='col'>CPF</th><th scope='col'>Data</th><th scope='col'>Entrada</th></tr></thead><tbody></tr>";
            // echo "<td>{$placa}</td>";
            // echo "<td>{$name}</td>";
            // echo "<td>{$cpf}</td>";
            // echo "<td>{$data}</td>";
            // echo "<td>{$entrada}</td></tr>";
            // echo "</tbody></table>";
        } else {
            echo "<br><p class='btn bg-danger col-lg-12'>Erro, Impossivel cadastrar carro</p>";
        }
    }

    function exit($carr, $saida) {

        try { $conn = self::connect();

            $saida = date('H:m:s');
            $insert = $conn->prepare("UPDATE carr SET saida = :saida WHERE carr = :carr ");
            $insert->bindParam(':carr', $carr);
            $insert->bindParam(':saida', $saida);
            $insert->execute();
            var_dump($insert);} catch (PDOException $e) {
            print $e->getMessage();
        }

        if ($insert->rowCount() >= 1) {
            echo "Atualizado";
        } else {
            echo "deu ruim";
        }

    }
}