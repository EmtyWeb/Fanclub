<div id="right">
    <div id="text_page">Последние новости</div>
    <?php
    //var_dump($result);
    foreach($result as $value){
        $id = $value['id'];
        $title = $value['title'];
        $img = $value['img'];
        $description = $value['description'];
        $date = $value['date'];
        $author = $value['author'];
        $view = $value['view'];
        echo <<<LABEL
                <div id='novost'>
                <p><a href='../text?id=$id' id='novost_title'>$title</a></p>

                <p id='novost_text'><img src='../../public/images/news/$img' id='mini_img'>$description</p>
                <div id='novost1'>Дата: $date | Автор: $author | Просмотров:$view</p></div>
                </div>
LABEL;
    }
    ?>
</div>