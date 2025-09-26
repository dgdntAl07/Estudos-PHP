<?php

$dsn = "mysql:dbname=login;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $sql = "SELECT * FROM usuarios;"; // o comando será inserido aqui!!
    $sql = $pdo->query($sql);

} catch (PDOException $e) {
    echo "Falhou!".$e->getMessage();
};