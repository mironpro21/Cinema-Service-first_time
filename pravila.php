<!DOCTYPE html>
<html lang="ru" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>ВКЛЮЧАЙСЯ</title>
		<meta name="description" content="Blueprint: On Scroll Effect Layout" />
		<meta name="keywords" content="on scroll, effect, slide in, layout, template, transition, javascript" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>
<link rel='stylesheet prefetch' href='http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/javascript.js"></script>
		<link href="_css/Icomoon/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="_scripts/jquery-2.0.2.min.js"></script>
<script type="text/javascript" src="_scripts/main.js"></script>

	</head>
	
	<style>
#loading{
	background-color: #374140;
	height: 100%;
	width: 100%;
	position: fixed;
	z-index: 1;
	margin-top: 0px;
	top: 0px;
}
#loading-center{
	width: 100%;
	height: 100%;
	position: relative;
}
#loading-center-absolute {
	position: absolute;
	left: 50%;
	top: 50%;
	height: 150px;
	width: 150px;
	margin-top: -75px;
	margin-left: -75px;
}
.object{
	width: 20px;
	height: 20px;
	background-color: #FFF;
	float: left;
	margin-right: 20px;
	margin-top: 65px;
	-moz-border-radius: 50% 50% 50% 50%;
	-webkit-border-radius: 50% 50% 50% 50%;
	border-radius: 50% 50% 50% 50%;
}

#object_one {	
	-webkit-animation: object_one 1.5s infinite;
	animation: object_one 1.5s infinite;
	}
#object_two {
	-webkit-animation: object_two 1.5s infinite;
	animation: object_two 1.5s infinite;
	-webkit-animation-delay: 0.25s; 
    animation-delay: 0.25s;
	}
#object_three {
    -webkit-animation: object_three 1.5s infinite;
	animation: object_three 1.5s infinite;
	-webkit-animation-delay: 0.5s;
    animation-delay: 0.5s;
	
	}

	






@-webkit-keyframes object_one {
75% { -webkit-transform: scale(0); }
}

@keyframes object_one {

  75% { 
    transform: scale(0);
    -webkit-transform: scale(0);
  }

}





@-webkit-keyframes object_two {
 

  75% { -webkit-transform: scale(0); }


}

@keyframes object_two {
  75% { 
    transform: scale(0);
    -webkit-transform:  scale(0);
  }

}

@-webkit-keyframes object_three {

  75% { -webkit-transform: scale(0); }

}

@keyframes object_three {

  75% { 
    transform: scale(0);
    -webkit-transform: scale(0);
  }
  
}





</style>
	
	<style>
	/* базовый контейнер */
.image-container {
    width: 170px;
    height: 229px;
    position: relative;
    cursor: pointer;
    overflow: hidden;
    display: inline-block;
    margin: 10px;
    -webkit-box-shadow: 2px 2px 50px rgba(0,0,0,0.6);
    -moz-box-shadow: 2px 2px 50px rgba(0,0,0,0.6);
    box-shadow: 2px 2px 50px rgba(0,0,0,0.6);
}
/* слайд сверху */
.image-container .caption-2 {
    top: -210px;
    transition: all 0.5s;
	z-index: 1;
}
.image-container:hover .caption-2 {
    top: 0;
    transition: all 0.5s;
}
 
/* изображение внутри контейнера */
.image-container img {
    width: 100%;
    height: 100%;
    position: absolute;
}
 
/* блок подписи к изображению */
.image-container .image-caption {
    width: 100%;
    height: 100%;
    position: absolute;
    background: rgba(0, 0, 0, 0.6);
    font-family: 'Open Sans',sans-serif;
    text-align: center;
}
 
/* заголовок подписи */
.image-caption h2 {
    margin-top: 50px;
    color: #fffefe;
    font-weight: 300;
}
 
/* абзац описания картинки */
.image-caption p {
    color: #fff;
}
</style>
	
	
	<style>
	/* Button */

	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	.button {
		-moz-appearance: none;
		-webkit-appearance: none;
		-o-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-o-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		background-color: #3cadd4;
		border-radius: 30px;
		border: 0;
		color: #ffffff !important;
		cursor: pointer;
		display: inline-block;
		font-weight: 100;
		height: 1.85em;
		line-height: 1.95em;
		padding: 0 1em;
		text-align: center;
		text-decoration: none;
		white-space: nowrap;
	}

		input[type="submit"]:hover,
		input[type="reset"]:hover,
		input[type="button"]:hover,
		.button:hover {
			background-color: #51b6d9;
			text-decoration: none;
		}

		input[type="submit"]:active,
		input[type="reset"]:active,
		input[type="button"]:active,
		.button:active {
			background-color: #2da2ca;
			text-decoration: none;
		}

		input[type="submit"].icon,
		input[type="reset"].icon,
		input[type="button"].icon,
		.button.icon {
			padding-left: 1.35em;
		}

			input[type="submit"].icon:before,
			input[type="reset"].icon:before,
			input[type="button"].icon:before,
			.button.icon:before {
				margin-right: 0.5em;
			}

		input[type="submit"].fit,
		input[type="reset"].fit,
		input[type="button"].fit,
		.button.fit {
			display: block;
			margin: 0 0 1em 0;
			width: 100%;
		}

		input[type="submit"].small,
		input[type="reset"].small,
		input[type="button"].small,
		.button.small {
			font-size: 0.8em;
		}

		input[type="submit"].big,
		input[type="reset"].big,
		input[type="button"].big,
		.button.big {
			font-size: 1.35em;
		}

		input[type="submit"].alt,
		input[type="reset"].alt,
		input[type="button"].alt,
		.button.alt {
			background-color: transparent;
			box-shadow: inset 0 0 0 2px rgba(144, 144, 144, 0.25);
			color: #474747 !important;
		}

			input[type="submit"].alt:hover,
			input[type="reset"].alt:hover,
			input[type="button"].alt:hover,
			.button.alt:hover {
				background-color: rgba(144, 144, 144, 0.075);
			}

			input[type="submit"].alt:active,
			input[type="reset"].alt:active,
			input[type="button"].alt:active,
			.button.alt:active {
				background-color: rgba(144, 144, 144, 0.2);
			}

			input[type="submit"].alt.icon:before,
			input[type="reset"].alt.icon:before,
			input[type="button"].alt.icon:before,
			.button.alt.icon:before {
				color: #858585;
			}

		input[type="submit"].special,
		input[type="reset"].special,
		input[type="button"].special,
		.button.special {
			background-color: #383b43;
			color: #ffffff !important;
		}

			input[type="submit"].special:hover,
			input[type="reset"].special:hover,
			input[type="button"].special:hover,
			.button.special:hover {
				background-color: #444751;
			}

			input[type="submit"].special:active,
			input[type="reset"].special:active,
			input[type="button"].special:active,
			.button.special:active {
				background-color: #2c2f35;
			}

		input[type="submit"].disabled, input[type="submit"]:disabled,
		input[type="reset"].disabled,
		input[type="reset"]:disabled,
		input[type="button"].disabled,
		input[type="button"]:disabled,
		.button.disabled,
		.button:disabled {
			background-color: #444 !important;
			box-shadow: inset 0 -0.15em 0 0 rgba(0, 0, 0, 0.15);
			color: #fff !important;
			cursor: default;
			opacity: 0.25;
		}
		</style>
	  


<style>

html, body{height:100%;} 


 
/*шапка*/
.firstScreen{height:100%; background: fixed url(path/to/image) no-repeat 50% 0;}
 
/*фиксированное плавающее меню*/
#top_nav{
   bottom:1000;
   position: fixed;
   z-index: 1000;
   color: black;
   width:500%;
   height:1500%;
}
</style>

<style>
ul {
width: 100%;
    position: fixed;    background: #1c1c1c;
	width: 50%
	height: 66px;
	z-index: 1000;
	top: -16px
	}
	</style>

<style>
  li {
    display: inline-block; /* Строчно-блочные элементы */
    -webkit-transform: skewX(-30deg); /* Для Safari и Chrome */
    -moz-transform: skewX(-30deg); /* Для Firefox */
    -o-transform: skewX(-30deg); /* Для Opera */
    -ms-transform: skewX(-30deg); /* Для IE */
    transform: skewX(-30deg); /* CSS3 */
   }
   a {
    
    display: block; /* Блочный элемент */
    padding: 0px 7px; /* Поля вокруг текста */
    text-decoration: none; /* Убираем подчёркивание */
    -webkit-transform: skewX(30deg); /* Для Safari и Chrome */
    -moz-transform: skewX(30deg); /* Для Firefox */
    -o-transform: skewX(30deg); /* Для Opera */
    -ms-transform: skewX(30deg); /* Для IE */
    transform: skewX(30deg); /* CSS3 */
   }
   </style>

<style>
   A {
    color: #808080 /* Цвет ссылок */
   }
   A:visited {
    color: #808080; /* Цвет посещенных ссылок */
   }
   A:active {
    color: #cfb53b; /* Цвет активных ссылок */
   }
   A:hover {
	   color: #cfb53b;
   }
</style>
   
<style>
#text_rp {
	color:#cfb53b;
}
</style>

<style>
#left { text-align: left; }
   #right { text-align: right; }
   #center { text-align: center; }
   .content {
    width: 75%; /* Ширина слоя */
    
   }
   </style>
  
  <style type="text/css">
<!--
.tab { margin-left: 40px; }
-->
</style>


  
  <style>
  html, body {
	  background: #333333
  }
  </style>

	
	<script>
  $(function(){
       // высота "шапки", px
       var h_hght = $('.firstScreen').outerHeight();
       // высота блока с меню, px
       var h_nav = $('#top_nav').outerHeight();
       var top;
       $(window).scroll(function(){
           // отступ сверху
           top = $(this).scrollTop();
           if((h_hght-top) <= h_nav){
               $('#top_nav').css('top','0');
           }
           else if(top < h_hght && top > 0){
               $('#top_nav').css({'bottom' : top, 'top':''});
           }
           else if(top < h_nav){
               $('#top_nav').css({'top':'','bottom':'0'});
           }
       });
   });     
</script>



			
	
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
<script type="text/javascript">
$(window).ready(function(){
	/* делаем плавное появление */
        $("#block1").fadeIn('slow');
});
</script>
<body>
<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_one"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_three"></div>

</div>
</div>
</div>

 <ul>
<div class="blue200x80" id="block1">




<div id="text_rp">



 <li style="margin-right: 100px; color: #cfb53b">ВКЛЮЧАЙСЯ</li>    <li>  <center><a   href="/">Главная</a></li> <li><a  href="/video/">Видео</a></center> </li> <li><a style="margin-right: 300px" href="/subscribe.php">Подписка</a></center> </li>  <li> <?php
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
	
    <li> <a href='/logout.php' class='button special'>Выход</a> <a href='/profile.php' class='button special'>Мой кино</a></li>";
}
//unsert($_SESSION['login']);

?></li>  


<center><hr width="11%" color="#cfb53b" align="left" size="10"></center>
</ul>

<br><br><br><br>




   <center><h1>Правила</h1></center>

<center>Не копировать сайт.</center>
<center>Не создавать более 3-х аккаунтов.</center>
<center>Не брать код сайта.</center>
<center>Не взламывать сайт.</center>
<br>
<center><h3>Также можно задать свой вопрос у нас , контакты - почта - mironpro21@gmail.com .</h3></center>





<br>



<br><br><br><br><br><br><br><br><br>
<?php

require_once("video/includes/niz.php")

?>
<br><br><br>
</div>
</body>







