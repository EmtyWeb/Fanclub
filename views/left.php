<?php
$myleft = new left_Model();
$friends = $myleft->friendsInfo();
$news = $myleft->newsInfo();
$match = $myleft->matchInfo();
?>

<div id="left">
    <div id='last_news'>
        <?php
             if(!$_SESSION['name']){
                 echo "Hello Guest!";
             }else{
                 echo "Hello ".$_SESSION['name']."!";
        }?></div>
    <div id='last_news'>

    <?php if (Session::get('loggedIn') == true):?>
        <a  id='enter' href="<?php echo URL;?>dashboard/logout">Выход</a>
          <?php
        if($_SESSION['name'] == 'Admin' AND $_SESSION['password'] == '4a12f14992c4101197869cff437054b8'){?>
            <a  id='enter' href="<?php echo URL;?>admin/admin">Admin</a>
       <?php } ?>
    <?php else: ?>
        <a id='enter' href="<?php echo URL;?>login">Вход</a>
        <a id='enter' href="<?php echo URL;?>registration">Регистрация</a>
    <?php  endif ?>
        </div>

    <div id='last_news'>Ближайший матч
        <?php
        foreach($match as $value){
            $img1 = $value['img1'];
            $img2= $value['img2'];
            $date = $value['date'];
            $game = $value['game'];
            $team1 = $value['team1'];
                 $team2 = $value['team2'];
            echo <<<LABEL
            <div id='match'>
                <div id='team1'><img src='../public/images/games/$img1'></div>
                <div id='team2'><img src='../public/images/games/$img2'></div>
                <div id='match_date'>$date</div>
                <div id='match_tur'>$game</div>
                <div id='OneVStwo'>$team1 : $team2</div>
             </div>
LABEL;
        }
        ?>
    </div>


    <div id='last_news'>Новости
        <?php
        foreach($news as $value){
            $id = $value['id'];
            $title= $value['title'];
            $author = $value['author'];
            $view = $value['view'];
            $a = URL;
            echo <<<LABEL
        <div id='last_news1'>
            <div id='last_news3'><a href='$a text?id=$id'>$title</a></div>
            <div id='last_news2'>Автор:$author | Просмотров: $view</div>
        </div>
LABEL;
        }
        ?>
    </div>

    <div id='last_news'>Друзья сайта
        <?php
        //var_dump($result);
        foreach($friends as $value){
            $link = $value['id'];
            $title = $value['title'];
            echo <<<LABEL
    <p id='last_news3'><a href='$link' target='_blank'>$title</a></p>
LABEL;
        }
        ?>
     </div>
</div>