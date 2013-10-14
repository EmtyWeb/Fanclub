<?php require 'admin.php';

foreach($result as $value){
    $id = $value['id'];
    $date = $value['date'];
    $game = $value['game'];
    $team1 = $value['team1'];
    $team2 = $value['team2'];
    $img1= $value['img1'];
    $img2 = $value['img2'];
}
?>
<?php if($_SESSION['name'] == 'Admin' AND $_SESSION['password'] == '4a12f14992c4101197869cff437054b8'){?>

        <div id="right">
    <div id="text_page">Добавления матчей</div>
    <div id="form">
        <form name="form1" method="post" action="/admin/matchRunEditView">
            <div>
                <label>Введите дату и время матча<br><input type="text" size="40" name="date" value = '<?=$date?>' id="date"></label>
            </div>
            <div>
                <label>Введите название турнира<br><input type="text" size="40" name="game" value = '<?=$game?>' id="game"></label>
            </div>
            <div>
                <label>Введите название первой команды<br><input  size="40" type="text" value = '<?=$team1?>' name="team1" id=""></label>
            </div>
            <div>
                <label>Введите название второй команды<br><input size="40" type="text" value = '<?=$team2?>' name="team2" id=""></label>
            </div>
            <div>
                <label>Эмблема первой команды<br><input type="text" size="40" value = '<?=$img1?>' name="img1" id="img1"></label>
            </div>
            <div>
                <label>Эмблема второй команды<br><input type="text" size="40" value = '<?=$img2?>' name="img2" id="img2"></label>
            </div>
            <input name ="id" type="hidden" value="<?=$id?>"><!-- передаем скрыто $id-->
            <div>
                <label><input type="submit" name="submit" id="submit" size="40" value="Редактировать матч"></label>
            </div>
        </form>
    </div>
</div>
<?php }else{
    echo "<script>document.location.replace('error');</script>";
} ?>