<?php 
include 'contato.class.php';

$contato = new Contato();

// $lista = $contato->getAll();
// print_r($lista); 

?>

<h1>Contatos</h1>

<a href="adicionar.php">[ADICIONAR]</a><br><br>

<table border="1" width="600">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>

    <?php
    $lista = $contato->getAll();
    foreach ($lista as $item):
    ?>

        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['nome']; ?></td>
            <td><?php echo $item['email']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $item['id'];?>">[EDITAR]</a>
                <a href="excluir.php?id=<?php echo $item['id']; ?>">[EXLUIR]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

 
<!-- 
// $contato->adicionar('diegdantas@gmail.com', 'Diego Dantas');
// $contato->adicionar('eduardasilva@gmail.com' , 'Maria Eduarda');
// $contato->adicionar('algumapessoa@gmail.com');

// $nome = $contato->getNome('eduardasilva@gmail.com');
// echo 'Nome: '.$nome;
-->