<?php
    require 'config.php';
?>

<a href="">Adicionar novo usuário</a>

<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>Senha</th>
        <th>Ações</th>
    </tr>
    <?php
        $sql = "SELECT * FROM usuarios";
        $sql = $pdo -> query($sql);
        if($sql -> rowCount() > 0){
            foreach($sql -> fetchAll() as $usuario){
                echo "<tr>";
                echo "<td>".$usuario['usuario']."</td>";
                echo "<td>".$usuario['senha']."</td>";
                echo '<td><a href="">Editar</a> - <a href="">Excluir</a></td>';
                echo "</tr>";
            }
        }
    ?>
</table>