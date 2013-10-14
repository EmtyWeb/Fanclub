<div id="right">
    <div id="text_page"></div>
    <?php
    //var_dump($result);
    foreach($result as $value){
        $img = $value['img'];
        $title = $value['title'];
        $text = $value['text'];
        $date = $value['date'];
        $author = $value['author'];
        $view = $value['view'];
        echo <<<LABEL
                <div><p>$title</p>
                <div><img src='../../public/images/news/$img' id='img'></div>
                <p id='novost_text'>$text</p>
                <div id='novost1'>Дата: $date | Автор: $author | Просмотров:$view</p></div>
</div>
LABEL;
    }
    ?>
    <p id='form_comment'>Коментарии:</p>
    <?php
    //var_dump($result);
    foreach($result2 as $value){
        $author = $value['author'];
        $date = $value['date'];
        $text = $value['text'];
        echo <<<LABEL
    <div id='post'>
        <div id='post1'>От: <span id='post2'>$author | Дата: $date</span></div>
        <div> $text</div>
    </div>
LABEL;
    }
    ?>
    <?php
    if(!$_SESSION['name']){
        echo "<p>Зарегистрируйтесь для того что-бы оставить кометарий!</p>";
    }else{ ?>
        <div id='form_comment'>
        <p>Добавить ваш коментарий</p>
    <form action="text/commentRun" method="post" name="formcomm">
        <p><label>Ваше имя: </label><input name="author" type="text" size="35" maxlength="30" required/></p>
        <p><label>Текст коментария: <br /><textarea name="text" type="text" cols="40" rows="4" required/></textarea> </label></p>
        <input name="id" type="hidden" value="<?php echo   $id =$_GET['id'];?>"> <!--Скрытое поле с переменной id чтоб знать к какой теме добавляем коментарий-->
        <p><input type="submit" name="sub_com" value="Коментировать"></p>
    </form>
    </div>
    <?php }?>
</div>
