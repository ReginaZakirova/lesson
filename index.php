<?php
    $hostname = "localhost";
    $username = "Victor";
    $password = "1";
    $dbname = "city";
    $db_con = mysqli_connect($hostname, $username, $password, $dbname) or die("Упс... соединение не установлено");
    mysqli_set_charset($db_con, 'utf8');
    $insert = mysqli_query($db_con, "INSERT INTO person (ID_person, Name, Age) VALUES (7, 'Kate', 15)");
    $select = mysqli_query($db_con, "SELECT * FROM person");
    $array_select = mysqli_fetch_all($select, MYSQLI_ASSOC);
    echo "<pre>";
    print_r($array_select);
    echo "</pre>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>