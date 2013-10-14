<?php require 'admin.php';
    foreach($result as $value){
        $id = $value['id'];
        $title = $value['title'];
        $date = $value['date'];
        $description = $value['description'];
        $text = $value['text'];
        $author = $value['author'];
        $img = $value['img'];
    }
?>
<?php if($_SESSION['name'] == 'Admin' AND $_SESSION['password'] == '4a12f14992c4101197869cff437054b8'){?>

<div id="right">
    <div id="text_page">Редактирование новости</div>
    <div id="form">
        <form name="form1" method="post" action="/admin/newsRunEditView">
            <p>
                <label>Введите название новости<br>
                    <input type="text" name="title" size ="80" value='<?=$title?>' id="title">
                </label>
            </p>
            <p>
                <label>Введите дату добавления новости<br>
                    <input name="date" type="text" id="date" value="<?=$date?>">
                </label>
            </p>
            <p>
                <label>Ведите краткое описание новости
                    <textarea name="description" id="description" cols="60" rows="5"><?=$description?></textarea>
                </label>
            </p>
            <p>
                <label>Введите полный текст новости
                    <textarea name="text" id="text" cols="60"  rows="20"><?=$text?></textarea>
                </label>
            </p>
            <p>
                <label>Введите автора новости<br>
                    <input type="text" name="author" value='<?=$author?>' id="author">
                </label>
            </p>
            <p>
                <label>Введите где лежит картинка<br>
                    <input type="text" name="img" value='<?=$img?>' size="60" id="name">
                </label>
            </p>
            <input name ="id" type="hidden" value="<?=$id?>"><!-- передаем скрыто $id-->
            <p>
                <label>
                    <input type="submit" name="submit" id="submit" value="Редактировать новость">
                </label>
            </p>
        </form>
    </div>
</div>
<?php }else{
    echo "<script>document.location.replace('error');</script>";
} ?>