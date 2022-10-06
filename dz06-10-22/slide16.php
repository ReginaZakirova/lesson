Задание 1, слайд 16<br>
<div class="form_cnt"?>
    <div class="td">
        <form name = 'form_z1' method="POST" action="" >
            <input type="text" name='name' placeholder="Name"><br>
            <textarea name="txtarea" id="txtarea" cols="21" rows="3" placeholder="message"></textarea><br>

            <input type="submit">
        </form>
    </div>
    <div class="td">
        <?php
        if($_POST){
            $to = 'frostt315@gmail.com';
            $subject = 'Домашка';
            $message = 'Логин '.$_POST['name']. "\r\n".'Сообщение '.$_POST['txtarea'];
            $headers = '';
            mail($to, $subject, $message, $headers);
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