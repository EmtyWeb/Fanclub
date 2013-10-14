<?php Session::initiation(); ?>
<html>
<head>
    <title><?php
        if(isset($this->title)){
            echo   $this->title;
        }else{ echo 'Fan Club';}

        ?></title>
    <link rel="stylesheet" href="<?php echo URL;?>public/css/index.css" type="text/css">
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/123.js"></script>
<?php
//подключение js для отдельного файла
    if(isset($this->js)){
        foreach($this->js as $js){
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }
?>

</head>
<body>
<!--Начало блока с эмблемой-->
<div id="header">
    <div id="ball"></div>
    <div id="emblem"></div>
    <div id="fun_club">
        <img id='funf' src="../public/images/f.fw.png">
        <img id='funa' src="../public/images/A.fw.png">
        <img id='funn' src="../public/images/N.fw.png">
        <img id='func' src="../public/images/C.fw.png">
        <img id='funl' src="../public/images/L.fw.png">
        <img id='funu' src="../public/images/u.fw.png">
        <img id='funb' src="../public/images/B.fw.png">
    </div>
</div>
<!--Начало блока меню-->
<div id="hed1">
    <div id="hed2">
        <ul id="menu">
            <li id="home"><a href="<?php echo URL;?>index">Главная</a></li>
            <li id="news"><a href="<?php echo URL;?>news">Новости</a></li>
            <li id="clab"><a href="<?php echo URL;?>club">Клуб</a>
                <ul>
                    <li class="history"><a href="<?php echo URL;?>history">История</a></li>
                    <li class="history"><a href="<?php echo URL;?>gift">Трофеи</a></li>
                    <li class="history"><a href="<?php echo URL;?>gimn">Гимн</a></li>
                </ul>
            </li>
            <li id="season"><a href="<?php echo URL;?>seasons">Сезоны</a>
                <ul>
                    <li ><a class="season" href="<?php echo URL;?>table">Турнирная таблица</a></li>
                    <li ><a class="season" href="<?php echo URL;?>calendar">Календарь Игр</a></li>
                </ul>
            </li>
            <li id="players"><a href="<?php echo URL;?>players">Игроки</a></li>
            <li id="other"><a href="<?php echo URL;?>diferent">Разное</a></li>
        </ul>
    </div>
</div>
<div id = 'test'>Тест:
    <p>Login = Admin
       Password = admin</p>
</div>

<!--Начало главного блока-->
<div id="block">
    <div id="internationale"><a href="/inter/index.php"></a></div>


