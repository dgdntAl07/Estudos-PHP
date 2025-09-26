<?php

require 'config.php';

try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $usuario = "Gabriel";
    $id = 5;

    $sql = "UPDATE usuarios SET usuario = :novousuario WHERE id = :novoid";
    $sql = $pdo -> prepare($sql);
    $sql -> bindValue(':novousuario', $usuario);
    $sql -> bindValue(':novoid', $id);
    $sql -> execute();
    
    echo "Usuário atualizado com sucesso!";

} catch (PDOException $e) {
    echo "Falhou".$e->getMessage();
};

?>
