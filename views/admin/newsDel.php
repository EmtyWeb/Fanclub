<?php require 'admin.php'; ?>
<?php if($_SESSION['name'] == 'Admin' AND $_SESSION['password'] == '4a12f14992c4101197869cff437054b8'){?>

<div id="right">
    <div id="text_page">Удаление новостей</div>
    <form action="/admin/newsDelRun" method="post">
        <?php
        //var_dump($result);
        foreach($result as $value){
            $id = $value['id'];
            $title = $value['title'];
            echo <<<LABEL
   <div><label><input name='id' type='radio' value='$id'>$title</label></div>
LABEL;
        }
        ?>
        <div><input name="submit" type="submit" value="Удалить"></div>
    </form>
</div>
<?php }else{
    echo "<script>document.location.replace('error');</script>";
} ?>