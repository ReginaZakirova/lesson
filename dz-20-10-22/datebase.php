<?php

$mysqli = new mysqli("127.0.0.1", "root", "root", "lesson");

/*$sql = "DROP TABLE TestTable";
if ($mysqli->query($sql) === TRUE) {
    echo "Таблица удалена<br>";
}*/


//create table
$sql = "CREATE TABLE TestTable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if ($mysqli->query($sql) === TRUE) {
    echo "Таблица создана<br>";
} else {
    echo $mysqli->error.'<br>';
}

//create table
$sql = "CREATE TABLE TestTable2 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if ($mysqli->query($sql) === TRUE) {
    echo "Таблица 2 создана<br>";
} else {
    echo $mysqli->error.'<br>';
}

//add value
$sql = "INSERT INTO TestTable (firstname, lastname, email)
VALUES ('ivan', 'ivanov', 'ivanov@mail.ru')";
//
//if ($mysqli->query($sql) === TRUE) {
//    echo "Значение добавлено в таблицу TestTable<br>";
//} else {
//    echo $mysqli->error.'<br>';
//}

//update value
$sql = "UPDATE TestTable SET lastname='alexandr' WHERE id=1";
if ($mysqli->query($sql) === TRUE) {
    echo "Значение изменено в TestTable<br>";
} else {
    echo $mysqli->error.'<br>';
}

//delete value
$sql = "DELETE FROM TestTable WHERE id=2";
if ($mysqli->query($sql) === TRUE) {
    echo "Значение удалено из TestTable<br>";
} else {
    echo $mysqli->error.'<br>';
}


//create table for join
$sql = "CREATE TABLE JoinTable1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
idemail INT(6),
reg_date TIMESTAMP
)";
if ($mysqli->query($sql) === TRUE) {
    echo "Таблица создана<br>";
}
$sql = "CREATE TABLE JoinTable2 (
idemail INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if ($mysqli->query($sql) === TRUE) {
    echo "Таблица создана<br>";
}

//join table
$sql = "SELECT *
FROM `JoinTable1`
INNER JOIN  `JoinTable2`
ON JoinTable1.idemail = JoinTable2.idemail";
$result = $mysqli->query($sql);
while($row = $result->fetch_assoc()) {
    echo '<pre>';
    print_r($row);
    echo '</pre>';
}

//alter table
$sql = "ALTER TABLE JoinTable1
DROP COLUMN reg_date;";
if ($mysqli->query($sql) === TRUE) {
    echo "Изменена структура таблицы<br>";
}

//Не работает данный запрос, не понимаю в чем причина, напряму в phpMyAdmin также пишет ошибку. В чем причина не пойму.
$sql = "ALTER TABLE JoinTable1
    FOREIGN KEY (idemail) REFERENCES JoinTable2(idemail)
      ON DELETE CASCADE
      ON UPDATE CASCADE";
if ($mysqli->query($sql) === TRUE) {
    echo "Установлен внешний ключ<br>";
}else{
    echo $mysqli->error.'<br>';
}
?>