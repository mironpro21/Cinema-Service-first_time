<?php
$dbhost = 'MySQL-5.5'; // или '127.0.0.1'
$dbuser = 'root';
$dbpass = '';
$dbname = 'premium';

// Подключение к базе данных
$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Проверка подключения
if ($db->connect_error) {
    die("Ошибка подключения: " . $db->connect_error);
}

// Ваши дальнейшие операции с базой данных здесь

// Закрытие подключения
$db->close();
?>
