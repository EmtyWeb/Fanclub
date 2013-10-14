<?php require 'admin.php'; ?>
<?php if($_SESSION['name'] == 'Admin' AND $_SESSION['password'] == '4a12f14992c4101197869cff437054b8'){?>

<div id="right">
    <div id="text_page">Добавления новостей</div>
    <div id="form">
            <form name="form1" method="post" action="/admin/newsAddRun">
                <p>
                    <label>Введите название новости<br>
                        <input type="text" name="title" size ="80" id="title">
                    </label>
                </p>
                <p>
                    <label>Введите дату добавления новости<br>
                        <input name="date" type="text" id="date" value="<? $date= date("Y-m-d"); echo $date;?>">
                    </label>
                </p>
                <p>
                    <label>Ведите краткое описание новости с тэгами абзацев
                        <textarea name="description" id="description" cols="60" rows="5"></textarea>
                    </label>
                </p>
                <p>
                    <label>Введите полный текст новости с тэгами
                        <textarea name="text" id="text" cols="60" rows="20"></textarea>
                    </label>
                </p>
                <p>
                    <label>Введите автора новости<br>
                        <input type="text" name="author" id="author">
                    </label>
                </p>
                <p>
                    <label>Введите где лежит картинка<br>
                        <input type="text" name="img" size="60" id="name">
                    </label>
                </p>
                <p>
                    <label>
                        <input type="submit" name="submit" id="submit" value="Занести новость в базу">
                    </label>
                </p>
            </form>
        </div>
</div>
<?php }else{
    echo "<script>document.location.replace('error');</script>";
} ?>