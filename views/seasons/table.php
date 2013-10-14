<div id="right">
    <div id="text_page">Турнирная таблица</div>
    <table class="table_team">
        <tr >
            <td class='tabletrm'>№</td>
            <td class='tabletrm'>Команда</td>
            <td class='tabletrm'>И</td>
            <td class='tabletrm'>В</td>
            <td class='tabletrm'>Н</td>
            <td class='tabletrm'>П</td>
            <td class='tabletrm'>Рм</td>
            <td class='tabletrm'>О</td>

        </tr>
    <?php
    //var_dump($result);
    foreach($result as $value){
        $id = $value['id'];
        $club_img= $value['club_img'];
        $team = $value['team'];
        $game = $value['game'];
        $win = $value['win'];
        $draw = $value['draw'];
        $off = $value['off'];
        $win_off = $value['win_off'];
        $total = $value['total'];
        echo <<<LABEL
                <tr>
                    <td class='tabletr'>$id</td>
                    <td class='tabletr'>$club_img $team</td>
                    <td class='tabletr'>$game</td>
                    <td class='tabletr'>$win</td>
                    <td class='tabletr'>$draw</td>
                    <td class='tabletr'>$off</td>
                    <td class='tabletr'>$win_off</td>
                    <td class='tabletr'>$total</td>
                </tr>
LABEL;
    }
    ?>
    </table>
</div>

