<?php
require_once ('mysql.php');
if ($mysqli->connect_errno) {
    die("Ошибка подключения: " . $mysqli->connect_error);
}

// Проверка входных данных
if (empty($_POST['login'])) {
    echo 'Логин не может быть пустым';
} elseif (empty($_POST['password'])) {
    echo 'Пароль не может быть пустым';
} else {
    // Подготовка запроса
    $stmt = $mysqli->prepare("INSERT INTO `users` (`login`, `password`) VALUES (?, ?)");
    
    if ($stmt) {
        // Хеширование пароля
        $hashedPassword = md5($_POST['password']); // Рекомендуется использовать password_hash для большей безопасности
        
        // Привязка параметров
        $stmt->bind_param("ss", $_POST['login'], $hashedPassword);
        
        // Выполнение запроса
        if ($stmt->execute()) {
            header('Location: /l.php?p=login');
            exit();
        } else {
            echo 'Ошибка выполнения запроса: ' . $stmt->error;
        }
        
        // Закрытие подготовленного выражения
        $stmt->close();
    } else {
        echo 'Ошибка подготовки запроса: ' . $mysqli->error;
    }
}
?>
<div id="text_rp">
<center><h1>Регистрация</h1>
<form method="post" action="">
    <input type="text" name="login" placeholder="Логин" maxlength="7" required>
	<hr width="19%" color="#cfb53b" align="center" size="10">
    <br>
    <input type="password" name="password" placeholder="Пароль" required>
	<hr width="19%" color="#cfb53b" align="center" size="10">
    <br>
    <input class="special button" value="Регистрация"	type="submit">
</form>

<br>
<li><a href="l.php?p=login">Авторизация</a></li>