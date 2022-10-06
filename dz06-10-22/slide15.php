Задание 1, слайд 15<br>
<div class="form_cnt"?>
    <div class="td">
        <form name = 'form_z1' method="POST">
            <input type="text" name='name' placeholder="Name"><br>
            <textarea name="txtarea" id="txtarea" cols="21" rows="3" placeholder="message"></textarea><br>
            <input type="checkbox" name='cb1[]' value = 'Выбор_1'>Выбор_1<br>
            <input type="checkbox" name='cb1[]' value = 'Выбор_2'>Выбор_2<br>
            <input type="checkbox" name='cb1[]' value = 'Выбор_3'>Выбор_3<br>

            <input type="radio" name='rb1' value = 'Переключатель_1'>Переключатель_1<br>
            <input type="radio" name='rb1' value = 'Переключатель_2'>Переключатель_2<br>
            <input type="radio" name='rb1' value = 'Переключатель_3'>Переключатель_3<br>

            <input type="submit">
        </form>
    </div>
    <div class="td">
        <?php
        echo "<br>";
        if($_POST){
            echo ($_POST['name']!='') ? "Имя пользователя: ".$_POST['name']."<br>":"";
            echo "<br>";
            echo ($_POST['txtarea']!='') ? "Сообщение пользователя: ".$_POST['txtarea']."<br>":"";
            echo "<br>";
            if($_POST['cb1']!=''){
                echo "Выбрано: <br>";
                foreach ($_POST['cb1'] as $item){
                    echo $item.'<br>';
                }
            }
            echo "<br>";
            echo ($_POST['rb1']!='') ? "Включено: ".$_POST['rb1']."<br>":"";
        }
        ?>
    </div>
</div>
Задание 2, слайд 15<br>
<div class="form_cnt"?>
    <div class="td">
        <form name = 'form_z2' method="POST">
            <input type="text" name='name' placeholder="Name"><br>
            <input type="password" name='password' placeholder="Password"><br>
            <input type="submit">
        </form>
    </div>
    <div class="td">
        <?php
        if($_POST){
            $_POST['password'] = base64_encode($_POST['password']);
            echo "Привет - ".$_POST['name'];echo "<br>";
            echo "Пароль - ".$_POST['password'];echo "<br>";
        }
        ?>
    </div>
</div>

Задание 3, слайд 15<br>
<div class="form_cnt"?>
    <div class="td">
        <form name = 'form_z3' method="POST">
            <input type="text" name='name' placeholder="Name"><br>
            <input type="password" name='password' placeholder="Password"><br>
            <input type="submit">
        </form>
    </div>
    <div class="td">
        <?php
        if($_POST){
            $spisok = array('alex' => base64_encode('pass1'),'ivan' => base64_encode('pass2'),'jhon' => base64_encode('pass3'),'stiv' => base64_encode('pass4'));
            if($_POST['password']!="" && $_POST['password']==$spisok[$_POST['name']]){
                echo "доступ к секретным страницам открыт";
            }else{
                echo "Не верное имя и пароль";
            }
        }
        ?>
    </div>
</div>

Задание 4, слайд 15<br>
<div class="form_cnt"?>
    <div class="td">
        <form name = 'form_z4' method="get">
            <select name="l" id="sel1">
                <option value="1">Лаб1</option>
                <option value="2">Лаб2</option>
                <option value="3">Лаб3</option>
                <option value="4">Лаб4</option>
                <input type="submit" value="Сформировать">
            </select>
        </form>
    </div>
    <div class="td">
        <?php
        if($_POST['sel1']){

        }
        ?>
    </div>
</div>
<style>
    .td{
        margin-right: 10px;
    }
    .form_cnt{
        display: flex;
    }
</style>
<?php
    $_POST = array();
?>