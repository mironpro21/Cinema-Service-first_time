<?php
require_once ('mysql.php');
if(empty($_POST['login'])){}
elseif(empty($_POST['password'])){}
else{
    $result = mysql_query("INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '".$_POST['login']."', '".md5($_POST['password'])."');");
    if($result){
		echo 'Успешно!';
        header('location: /l.php?p=login');
    }
    else{
        echo 'Ошибка запроса в базу';
    }
}
?>
<div id="text_rp">
<center><h1>Регистрация</h1>
<form method="post" action="">
    
	
    <input type="text" placeholder="Логин" name="login" required>
    <hr width="19%" color="#cfb53b" align="center" size="10">
	<br>
	
	
    <input type="password" placeholder="Пароль" name="password" required>
    <hr width="19%" color="#cfb53b" align="center" size="10">
	<br>
    <input class="button special" value="Регистрация" type="submit">
</form>
<br>
<li><a href="l.php?p=login">Авторизация</a></li>
</center>