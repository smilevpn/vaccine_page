<?php function check_mobile_device() { 
    $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);    
    foreach ($mobile_agent_array as $value) {    
        if (strpos($agent, $value) !== false) return true;   
    };     
    return false; 
};?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="canonical" href="http://needcom.ru/" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Статьи о компьютерной технике</title>
	<meta property="og:site_name" content="Ремонт ноутбуков в Вологде" />
		<meta property="og:title" content="Интересные статьи о компьютерной технике" />
		<meta property="og:locale" content="ru_RU" />
		<meta property="og:description" content="Удаленное обучение пользования программами, настройка удаленного доступа к рабочей машине из дома, программы для автоматизации работы, статьи для работы с программами." />
		<meta property="og:url" content="http://needcom.ru" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="http://needcom.ru/img/favicon.svg"/>
        <meta name="description" content="Удаленное обучение пользования программами, настройка удаленного доступа к рабочей машине из дома, программы для автоматизации работы.">
<meta name="keywords" content="Удаленная помощь, настройка компьютера, Разбираемся в компьютере Вологда, статьи о компьютерной технике">
	<link rel="stylesheet" type="text/css" href="http://needcom.ru/css/bootstrap.css">
	<script src="http://needcom.ru/js/bootstrap.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="http://needcom.ru/mobi-menu.css">
	<script src="http://needcom.ru/js/jquery.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="http://needcom.ru/main.css">
	<link rel="icon" href="http://needcom.ru/img/favicon.svg" type="image/svg+xml">
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-195714958-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-195714958-1');
</script>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(68998459, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/68998459" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>
			<div class="header-contacts">
				<img src="http://needcom.ru/img/cont-tel.png" id="header-telephone-img">
					<span class="header-telephone">
						<span class="header-min-text">Телефон </span><a href="tel:+79114448309">
							<font color="#00CDAE">8-911-444-83-09</font></a>
					</span>
				<img src="http://needcom.ru/img/cont-worktime.png" id="header-working-time-img">
						<span class="header-working-time">
							<span class="header-min-text">Работаем </span><font color="#00CDAE">
							с 8<sup>00</sup> до 20<sup>00</sup></font>
						</span>
				<img src="http://needcom.ru/img/cont-email.png" id="header-email-img">
					<span class="header-email">
						<span class="header-min-text">Эл.почта </span><a href="mailto:metal_92@list.ru">
							<font color="#00CDAE">metal_92@list.ru</font></a>
						</span>
			</div>					
	
<script>if( window.innerWidth >= 1000 ){
      $(document).ready(function(){
	 
	        var $menu = $("#menu");
	 
	        $(window).scroll(function(){
	            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
	                $menu.removeClass("default").addClass("fixed").addClass("justify-content-center");
	            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
	                $menu.removeClass("fixed").addClass("default");
	                // $menu.removeClass("justify-content-center");
	            }       });
	    });
 } else {
      //не выполнять
 }</script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav-menu">
  <a class="navbar-brand" href="http://needcom.ru/main"><img id="logotip" src="http://needcom.ru/img/logo.jpg"></a>
  <button class="navbar-toggler" id="mobi-menu" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
    <h4>Меню</h4>
  </button>
  <div class="collapse navbar-collapse justify-content-center default" id="menu">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://needcom.ru/main">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://needcom.ru/services">Услуги</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://needcom.ru/comments">Отзывы</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://needcom.ru/purchase">Скупка</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://needcom.ru/market">Рынок</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://needcom.ru/articles">Статьи</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://needcom.ru/contacts">Контакты</a>
      </li>
    </ul>
  </div>
</nav>


	<div class="wrapper">
	<header>
		<h1>Полезные статьи для работы</h1>
	</header>
	<div class="content">
	<article>
		В ближайшем будущем в данном разделе будут появляться интересные статьи!
		<!-- <ul>
			<li><a href="">Настройка компьютера для работы</a></li>
			<li><a href="#">Чистка принтера</a></li>
			<li><a href="#">Ведение табельного учета</a></li>
			<li><a href="#">Служебные записки</a></li>
			<li><a href="#">VipNet и с чем его едят</a></li>
		</ul> -->
	</article>
	</div>
	<footer>
		<div class="footer-contacts">
			<div class="footer-logo"><img src="http://needcom.ru/img/footer-logo.jpg" alt="" width="80%"></div>
			<div class="footer-categories">
				<span class="footerh3">Услуги</span>
				<br>
				<a href="http://needcom.ru/service/repairpc" class="footer-href">Ремонт компьютеров</a>
				<br>
				<a href="http://needcom.ru/service/repairnotebooks" class="footer-href">Ремонт ноутбуков</a>
				<br>
				<a href="http://needcom.ru/service/repairphones" class="footer-href">Ремонт телефонов</a>
				<br>
				<a href="http://needcom.ru/service/repairtablets" class="footer-href">Ремонт планшетов</a>
				<br>
				<a href="http://needcom.ru/service/repairtv" class="footer-href">Ремонт телевизоров</a>
				<br>
				<a href="http://needcom.ru/service/otherservices" class="footer-href">Другие услуги</a>
			</div>
			<div class="footer-guard">
				<span class="footerh3">Меню</span>
				<br>
				<a href="http://needcom.ru/main" class="footer-href">Главная</a>
				<br>
				<a href="http://needcom.ru/comments" class="footer-href">Отзывы</a>
				<br>
				<a href="http://needcom.ru/purchase" class="footer-href">Скупка</a>
				<br>
				<a href="http://needcom.ru/market" class="footer-href">Рынок</a>
				<br>
				<a href="http://needcom.ru/articles" class="footer-href">Статьи</a>
			</div>
			<div class="footer-links">
				<span class="footerh3">Контакты:</span>
				<br>
				телефон мастера г.Вологда
				<br>
				<a href="tel:+79114448309" class="footer-tel">8-911-444-83-09</a>
				<br>
				телефон мастера г.Сокол
				<br>
				<a href="tel:+79115006808" class="footer-tel">8-911-500-68-08</a>	
			</div>

			<div class="footer-social">
				<?php if(check_mobile_device()) :
				echo '<a title="Viber" class="social-img" href="viber://add?number=79114448309"><img src="http://needcom.ru/img/viber.png" alt="" width="30px"></a>';              
 				else :
 	 			echo '<a title="Viber" class="social-img" href="viber://chat?number=+79114448309"><img src="http://needcom.ru/img/viber.png" alt="" width="30px"></a>';
 				endif; ?>

 				<a href="https://wa.me/79114448309?text=Сообщение%20needcom" title="Поделиться в WhatsApp" target="_blank" class="social-img"><img src="http://needcom.ru/img/whatsapp.png" alt="" width="30px"></a>

 				<a href="https://telegram.im/@smilevpn" target="_blank" class="social-img"><img src="http://needcom.ru/img/telegram.png" alt="" width="30px"></a>

				<a href="https://vk.com/id5436634" target="_blank" class="social-img"><img src="http://needcom.ru/img/vk.png" alt="" width="30px"></a>

				<!-- <a href="https://www.youtube.com/user/SmileVPN/videos" target="_blank" class="social-img"><img src="img/youtube_alt.png" alt="" width="30px"></a> -->

			</div>

		</div>
	<div class="copy">
		<hr>
			Информация на сайте носит ознакомительный характер и не является публичной офертой. 
			<br>
			© 2020 smilevpn. Все права защищены
			</div>
	</footer>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
