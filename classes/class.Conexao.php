<?php

class conexao {

    public $conexao;
    

    function __construct()
    {
        $dbHost = 'Localhost';
        $dbName = 'braga';
        $dbUsername = 'root';
        $dbPassword = '';

        $mysql = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);


        if (!$mysql) {
            echo "Erro de conexão";
            exit;
        }

        $this->conexao = $mysql;
    }
    
}