<?php require 'admin.php'; ?>
<?php if($_SESSION['name'] == 'Admin' AND $_SESSION['password'] == '4a12f14992c4101197869cff437054b8'){?>

<div id="right">
    <div id="text_page">Добавления матчей</div>
    <div id="form">
        <form name="form1" method="post" action="/admin/matchAddRun">
            <div>
                <label>Введите дату и время матча<br><input type="text" size="40" name="date" id="date"></label>
            </div>
            <div>
                <label>Введите название турнира<br><input type="text" size="40" name="game" id="game"></label>
            </div>
            <div>
                <label>Введите название первой команды<br><input  size="40" type="text" name="team1" id=""></label>
            </div>
            <div>
                <label>Введите название второй команды<br><input size="40" type="text" name="team2" id=""></label>
            </div>
            <div>
                <label>Эмблема первой команды<br><input type="text" size="40" name="img1" id="img1"></label>
            </div>
            <div>
                <label>Эмблема второй команды<br><input type="text" size="40" name="img2" id="img2"></label>
            </div>
            <div>
                <label><input type="submit" name="submit" id="submit" size="40" value="Занести матч в базу"></label>
            </div>
        </form>
    </div>
</div>
<?php }else{
    echo "<script>document.location.replace('error');</script>";
} ?>