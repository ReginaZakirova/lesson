Задание 3, слайд 16<br>
<div class="form_cnt"?>
        <form name = 'anketa' method="POST" action="" >
            <?php
            for($i=1;$i<=19;$i++){
                if($i%4==0)
                    echo "<div class='td'>"?>
                Вопрос №<?=$i?><br>
            <input type="radio" name="<?=$i?>" value="yes" checked>Да<br>
            <input type="radio" name="<?=$i?>" value="no">Нет<br><br>
    <?php
                if($i%4==0) echo "</div>";
            }?>
            <input type="submit">
        </form>
        <?php
        if($_POST){
            $p=$_POST;
            $ball=0;
            if($p['3']=='yes') $ball++;
            if($p['9']=='yes') $ball++;
            if($p['10']=='yes') $ball++;
            if($p['13']=='yes') $ball++;
            if($p['14']=='yes') $ball++;
            if($p['19']=='yes') $ball++;

            if($p['1']=='no') $ball++;
            if($p['2']=='no') $ball++;
            if($p['4']=='no') $ball++;
            if($p['5']=='no') $ball++;
            if($p['6']=='no') $ball++;
            if($p['7']=='no') $ball++;
            if($p['8']=='no') $ball++;
            if($p['11']=='no') $ball++;
            if($p['12']=='no') $ball++;
            if($p['15']=='no') $ball++;
            if($p['17']=='no') $ball++;
            if($p['16']=='no') $ball++;
            if($p['18']=='no') $ball++;

            if($ball>=15){
                echo "<br>Ваш балл - $ball. У Вас покладистый характер";
            }else if($ball>=8){
                echo "<br>Ваш балл - $ball. Вы не лишены недостатков, но с вами можно ладить";
            }else{
                echo "<br>Ваш балл - $ball. Вашим друзьям можно посочувствовать";

            }
        }
        ?>
</div>

<style>
    .td{
        margin-right: 10px;
    }
    .form_cnt{
        display: flex;
    }
</style>