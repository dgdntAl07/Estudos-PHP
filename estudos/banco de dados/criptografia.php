<?php

$nome = "Diego";
$nome2 = base64_encode($nome);

echo "Nome 01: ".$nome."<br>";
echo "Nome criptografado: ".$nome2."<br>";

echo "Descriptografando: ".base64_decode($nome2);