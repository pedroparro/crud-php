<?php
    $server = "127.0.0.1";
    $sql = "form";
    $user = "root";
    $pass = "";
    global $pdo;

    try {
        global $pdo;
        $pdo = new \PDO("mysql:host=$server;dbname=$sql",$user,$pass);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        //echo "Conectado com sucesso";
    } catch (\PDOException $erro) {
        echo "Ocorreu erro na conexão: {$erro->getMessage()}";
        }
            
?>
