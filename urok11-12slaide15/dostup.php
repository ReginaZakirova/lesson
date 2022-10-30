<?php
if (isset($_POST['pass'])) {
    $new_url = 'http://urok11-12slaide15';
    $_POST['pass'] = md5($_POST['pass']);
    print_r($_GET);
    print_r($_POST);
    if ($_POST['login'] != 'Egor' and $_POST['pass'] != 'e10adc3949ba59abbe56e057f20f883e') {
        header('Location: ' . $new_url);
    }
}
?>
<!DOCTYPE html>
Доступ к секретным страницам открыт
</html>