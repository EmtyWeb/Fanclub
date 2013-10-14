<?php if($_SESSION['name'] == 'Admin' AND $_SESSION['password'] == '4a12f14992c4101197869cff437054b8'){?>
<div id="right">
    <div id="text_page">Админский блок</div>
    <div><p>Здравствуйте!</p>
        Вас приветствует страница управления сайтом!
    </div>
            <ul id="adminMenu">
                <li id="">Матчи
                    <ul>
                        <li><a href="<?php echo URL;?>admin/matchAdd">Добавить</a></li>
                        <li><a href="<?php echo URL;?>admin/matchEdit">Редактировать</a></li>
                        <li><a href="<?php echo URL;?>admin/matchDel">Удалить</a></li>
                    </ul>
                </li>
                <li id="">Новости
                    <ul>
                        <li><a href="<?php echo URL;?>admin/newsAdd">Добавить</a></li>
                        <li><a href="<?php echo URL;?>admin/newsEdit">Редактировать</a></li>
                        <li><a href="<?php echo URL;?>admin/newsDel">Удалить</a></li>
                    </ul>
                </li>
                <li id="">Друзья
                    <ul>
                        <li><a href="<?php echo URL;?>admin/friendAdd">Добавить</a></li>
                        <li><a href="<?php echo URL;?>admin/friendEdit">Редактировать</a></li>
                        <li><a href="<?php echo URL;?>admin/friendDel">Удалить</a></li>
                    </ul>
                </li>
            </ul>

</div>
<?php }else{
    echo "<script>document.location.replace('error');</script>";
} ?>