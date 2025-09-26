<?php 

$db = "mysql:dbname=sistema_escolar;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
    $pdo = new PDO($db, $dbuser, $dbpass);

    $sql = "SELECT * FROM estudantes";
    $sql = $pdo->query($sql);

} catch(PDOException $e) {
    echo "Falha na Conexão!!". $e->getMessage();
}