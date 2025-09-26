<?php

$arquivo = "imgs/capybara-floating.jpg";

$altura = 200;
$largura = 200;

// Pega o tamanho do arquivo
list($largura_original, $altura_original) = getimagesize($arquivo);

// Calcula e redimensiona a imagem
$ratio = $largura_original / $altura_original;

if ($largura/$altura > $ratio){
    $largura = $altura * $ratio;
} else {
    $altura = $largura / $ratio;
};

// Passa na tela o tamanho das imagens
// echo "Altura: ".$altura." - Largura: ".$largura."<br>";
// echo "Altura original: ".$altura_original." - Largura original: ".$largura_original;

// Criar a imagem redimensionada
$imagem_final = imagecreatetruecolor($largura, $altura);
$imagem_original = imagecreatefromjpeg($arquivo);

imagecopyresampled($imagem_final, $imagem_original,0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);

// Exibir imagem na tela
header("Content-Type: image/jpeg");
imagejpeg($imagem_final, null);

?>

