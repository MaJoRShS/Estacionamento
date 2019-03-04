<?php

    include '../conexao.php';

    $sql = mysql_query("SELECT id_adm, name, mail FROM administrador ORDER BY name");

    echo '<table width="100%"; border="1"; text-align>';
    echo '<thead><tr>';
    echo '<th>Id</th>';
    echo '<th>Nome</th>';
    echo '<th>E-mail</th>';
    echo '</tr></thead>';
    echo '<tbody>';



    while ($row = mysql_fetch_assoc($sql)) {
       echo '<tr>';
       echo '<td>' . $row['id_adm'] . '</td>';
       echo '<td>' . $row['name'] . '</td>';
       echo '<td>' . $row['mail'] . '</td>';
       echo '</tr>';
    }

    echo '</tbody></table>';


    mysql_free_result($sql);

echo "<br><a href='../../../selecionarCadastro.php'>Voltar ao Painel de Controle</a>";
?>



