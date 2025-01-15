<?php
require_once ('mysql.php');
if(empty($_POST['login'])){}
elseif(empty($_POST['password'])){}
else {
    $query = mysql_fetch_assoc(mysql_query("SELECT * FROM `users` WHERE `login`='".$_POST['login']."' AND `password`='".md5($_POST['password'])."' "));
    if($query){
        $_SESSION['login'] = $_POST['login'];
        echo 'Авторизуемся';
        header('location: /');
    }
    else {
        echo 'Пользователь не найден';
    }


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