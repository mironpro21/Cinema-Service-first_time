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
		<script src="js/modernizr.custom.js"></script>
	</head>
	
	
	
	
	
	<code> 
<style> 
img.foto-img { 
border: 1px solid #BBB; 
margin: 10px 20px 10px 0; 
padding: 2px; 
vertical-align: top; 
} 
</style> 
<link> 
<script></script> 
<script> 
$(document).ready(function () { 
$("a[rel=news_gallery]").fancybox({ // всем сылкам с атрибутом news_gallery применить обьект fancybox 
'transitionIn':'none', 
'transitionOut':'none', 
'titlePosition':'over', 
'titleFormat':function (title, currentArray, currentIndex, currentOpts) { 
 //свой кастом подпись фоки при увеличенном размере 
return 'Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' ' + title : '') + ''; 
} 
}); 
}); 
</script> 

</code> 

	
	<script type="text/javascript">
    document.ondragstart = noselect; 
    // запрет на перетаскивание 
    document.onselectstart = noselect; 
    // запрет на выделение элементов страницы 
    document.oncontextmenu = noselect; 
    // запрет на выведение контекстного меню 
    function noselect() {return false;} 
</script>
	

	
	<style>
    #text {
    position:absolute;
    width:600px;
    height:120px;
    left:50%;
    top:50%;
    margin-left:-300px;
    margin-top:-60px;
    text-align:center;
    text-transform:uppercase;
    -webkit-tranform:translateZ(0);
    -webkit-transition-duration:0.05s;
    -moz-tranform:translateZ(0);
    color:#cfb53b;
    text-shadow:0 0 1px rgba(0,0,0,.2);
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
   width:500%;
   height:100px;
}
</style>

 <style type="text/css">
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
   li {
    display: inline-block; /* Строчно-блочные элементы */
   
    
    -webkit-transform: skewX(-30deg); /* Для Safari и Chrome */
    -moz-transform: skewX(-30deg); /* Для Firefox */
    -o-transform: skewX(-30deg); /* Для Opera */
    -ms-transform: skewX(-30deg); /* Для IE */
    transform: skewX(-30deg); /* CSS3 */
   }
   a {
    color: #fff; /* Цвет ссылок */
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







<div class="blue200x80" id="block1">


<div id="text_rp">
<div id="top_nav">


  <ul>
 <li style="margin-right: 150px">ВКЛЮЧАЙСЯ</li>    <li>  <center><A   href="/">Главная</a></li> <li><A  href="/video/">Видео</a></center> </li> <li><A   href="/subscribe.php">Подписка</a></center> </li>

<hr width="100%" color="#cfb53b" align="center" size="10">

</div>
<br><br><br><br><br>
</body>

<center><h3>Условия использования подписки ПРЕМИУМ</h3></center>
<center>Подписку вы получаете на 1 месяц</center>
<center>Вы получите фильмы которые нельзя посмотреть без подписки,</center>
<center>также в HD-качестве</center>
<center>Цена: 99 руб. В месяц</center>
<hr width="30%" color="#cfb53b" align="center" size="5">
<center><li><A   href="/subscribe_info.php">Согласен, на условия</a></li></center>
<br><br><br>

<center>ВКЛЮЧАЙСЯ 2018</center>
<br>
</div>

</div>
