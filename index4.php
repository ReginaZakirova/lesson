<?php
session_start();
$last = date('H:i:s', strtotime('+5 hours'));
$_SESSION['last'] = $last;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2</title>
</head>
<body>
    <h1>Последний раз вы заходили <?php echo $_SESSION['last']; ?></h1> 
</body>
</html>