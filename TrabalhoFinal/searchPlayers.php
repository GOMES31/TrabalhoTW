<?php

include "db_connect.php";

    $playerName = $_POST['playerName'];

    $pdo = openPDO('db_players');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

    $sql = "SELECT * FROM tbl_players WHERE Nome=?";
    $stmt = $pdo->prepare($sql);
    $sql_execute = $stmt->execute([$playerName]);
    $num_registers = $stmt->rowCount();
    if ($num_registers == 0) {
        echo '<tr class="player_tr_1">
                  <td colspan="15"> No players found</td>
     </tr>';
        closePDO($pdo);
        exit;
    } else {
        while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo '<tr><td>';
            echo $row->Nome;
            echo '</td><td>';
            echo $row->Equipa;
            echo '<tr><td>';
            echo $row->Nacionalidade;
            echo '</td><tr>';
            echo '<td><button type="submit" id="starIcon" class="fa fa-star"></button></td>';
        }
    }
?>