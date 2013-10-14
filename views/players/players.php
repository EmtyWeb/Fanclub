<div id="rightp">
    <div id="text_page">Состав Интера 2013-2014</div>
        <?php
        //var_dump($result);
        echo $e;
        foreach($result as $value){
            $id = $value['id'];
            $name = $value['name'];
            $position = $value['position'];
            $nationality = $value['nationality'];
            $tall = $value['tall'];
            $weight = $value['weight'];
            $img = $value['img'];
            echo <<<LABEL
                <div   class='players'>
                <div ><img id='player$id'  class='photo'  src='../../public/images/img_players/$img'></div>
                <div class='namepl'>$name</div>
                <div class='featurespl'>Позиция: <span class='featurespl2'>$position</span></div>
                <div class='featurespl'>Гражданство: <span class='featurespl2'>$nationality</span></div>
                <div class='featurespl'>Рост: <span class='featurespl2'>$tall</span></div>
                <div class='featurespl'>Вес: <span class='featurespl2'>$weight</span></div>
                </div>
LABEL;
        }
        ?>
</div>