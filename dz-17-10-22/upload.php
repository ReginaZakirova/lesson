<form action="" method="post" enctype="multipart/form-data">
    <p>
        login <input type="text" name="login">
    </p>
    <p>
        <input type="submit">
    </p>
    <p>
        <input type="file" name="images">
    </p>
</form>
<?php
    print_r($_FILES);
$fileTmpPath=$_FILES['file']['tmp_name'];
$dest_path = 'images/'.$_FILES['file']['name'];
move_uploaded_file($fileTmpPath, $dest_path);
?>
<?php

//задание 1
    $text = "Hello, world! I'm Name";
    $fp = fopen("hello.txt", "w+");
    if(fwrite($fp, $text)){
        echo "Запись добавлена!<br><br>";
    }

//задание 2
    rmdir('test');
    fclose($fp);
        if (mkdir('test', 0777)) {
            echo "Папка test создана<br><br>";
        }

//задание 3
    $str = file('file.txt');
    foreach ($str as $item){
        $ar = explode(',', $item);
        echo 'Имя - '.$ar[1].'; Фамилия - '.$ar[0];
        echo '<br>';
        }
    echo '<pre>';
    print_r($str);
    echo '</pre>';

//задание 4
$p=0;
$data1 = file('file1.txt');
$data2 = file('file2.txt');
$fp = fopen('file3.txt','w+');
$povtor=0;
foreach ($data1 as $item){
    foreach ($data2 as $item2){
       if($item == $item2){
           $povtor=1;
       }
    }
    if($povtor==0){
        $data3[]=$item;
    }
        $povtor=0;
}
foreach ($data2 as $item2){
    $data3[]=$item2;
}
foreach ($data3 as $item){
    fwrite($fp,$item);
}
$p=count($data3);
echo 'Добавлено - '.$p.' уникальных предложений<br>';
fclose($fp);

//задание 5
$p=0;
    $data1 = file('file1.txt');
    $data2 = file('file2.txt');
    $fp = fopen('file4.txt','w+');
    foreach ($data1 as $item){
        foreach ($data2 as $item2){
            if($item==$item2){
                fwrite($fp,$item2);
                $p++;
            }
        }
    }
    echo 'Добавлено - '.$p.' повторяющихся предложений';
    fclose($fp);
?>