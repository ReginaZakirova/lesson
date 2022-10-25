<?php
$hostname = 'localhost';
$username = 'Danil';
$password = '1';
$dbname = 'city';
$db_con = mysqli_connect($hostname,$username,$password,$dbname) or die("Соединение не установлено");
var_dump(mysqli_connect_error());
mysqli_set_charset($db_con, 'utf8');
$insert = mysqli_query($db_con, "INSERT INTO `person`(`ID_person`, `Name`, `Age`) VALUES ('6','Timur','32')");
$select = mysqli_query($db_con, "SELECT * FROM `person`");
$array_select = mysqli_fetch_all($select, MYSQLI_ASSOC);
echo "<pre>";
print_r($array_select);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>