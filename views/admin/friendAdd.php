<?php require 'admin.php'; ?>
<?php if($_SESSION['name'] == 'Admin' AND $_SESSION['password'] == '4a12f14992c4101197869cff437054b8'){?>

<div id="right">
    <div id="text_page">Добавления друзей</div>
    <div id="form">
        <form name="form1" method="post" action="/admin/friendAddRun">
            <div>
                <label>Введите название cайта<br><input size="80" type="text" name="title" id="title"></label>
            </div>
            <div>
                <label>Ccылка<br><input type="text" size="80" name="link" id="link"></label>
            </div>
            <div>
                <label><input type="submit" name="submit" id="submit" value="Занести сайт в базу"></label>
            </div>
        </form>
    </div>
</div>
<?php }else{
    echo "<script>document.location.replace('error');</script>";
} ?>