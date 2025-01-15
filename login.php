<?php
require_once ('mysql.php');
session_start(); // Не забудьте начать сессии

// Проверка на наличие данных в POST
if (empty($_POST['login'])) {
    echo 'Логин не может быть пустым';
} elseif (empty($_POST['password'])) {
    echo 'Пароль не может быть пустым';
} else {
    
    $stmt = $mysqli->prepare("SELECT * FROM `users` WHERE `login` = ? AND `password` = ?");
    $passwordHash = md5($_POST['password']); // Используйте более безопасный хеш, например, password_hash
    $stmt->bind_param("ss", $_POST['login'], $passwordHash);
    $stmt->execute();
    $result = $stmt->get_result();

    // Проверка результата
    if ($result->num_rows > 0) {
        $_SESSION['login'] = $_POST['login'];
        echo 'Авторизуемся';
        header('Location: /');
        exit();
    } else {
        echo 'Пользователь не найден';
    }

    // Закрытие соединения
    $stmt->close();
    $mysqli->close();
}
?>
<div id="text_rp">
<center><h1>Авторизация</h1></center>
<center><form method="post" action="">
   
    <input type="text" placeholder="Логин"  name="login">
    <hr width="19%" color="#cfb53b" align="center" size="10">
	<br>
	
    
    <input type="password" placeholder="Пароль" name="password">
	<hr width="19%" color="#cfb53b" align="center" size="10">


    <br>
    <input class="button special" value="Войти" type="submit">
	
</form>
<br>
<li><a href="l.php?p=register">Регистрация</a></li>
</center>