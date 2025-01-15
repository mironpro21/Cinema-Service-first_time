<ul>
<div class="blue200x80" id="block1">




<div id="text_rp">



 <li style="margin-right: 100px; color: #cfb53b">ВКЛЮЧАЙСЯ</li>    <li>  <center><A   href="/">Главная</a></li> <li><A  href="/video/">Видео</a></center> </li> <li><a style="margin-right: 300px" href="/subscribe.php">Подписка</a></center> </li>  <li> <?php
session_start();
require_once('mysql.php');
header('Content-Type: text/html; charset=utf-8');

if(empty($_SESSION['login'])){
    if($_GET['p']==''){
        echo "
		<li><a href='/l.php' class='button special'>Войти</a></li>
        ";

    }
    elseif($_GET['p']=='login'){
        require_once('/login.php');
    }
    elseif($_GET['p']=='register'){
        require_once('/register.php');
    }
}
else {

    require_once('auth.php');
    echo "
    <br>
	
    <li> <a href='/logout.php' class='button special'>Выход</a> <a href='/profile.php' class='button special'>Мой профиль</a></li>";
}
//unsert($_SESSION['login']);

?></li>  


<center><hr width="11%" color="#cfb53b" align="left" size="10"></center>
</ul>