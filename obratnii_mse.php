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
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Статьи о компьютерной технике</title>
	<meta property="og:site_name" content="Ремонт ноутбуков в Вологде" />
		<meta property="og:title" content="Интересные статьи о компьютерной технике" />
		<meta property="og:locale" content="ru_RU" />
		<meta property="og:description" content="Удаленное обучение пользования программами, настройка удаленного доступа к рабочей машине из дома, программы для автоматизации работы, статьи для работы с программами." />
		<meta property="og:url" content="http://needcom.ru" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="../img/favicon.svg"/>
        <meta name="description" content="Удаленное обучение пользования программами, настройка удаленного доступа к рабочей машине из дома, программы для автоматизации работы.">
<meta name="keywords" content="Удаленная помощь, настройка компьютера, Разбираемся в компьютере Вологда, статьи о компьютерной технике">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script src="../js/bootstrap.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="../main.css">
	<link rel="stylesheet" type="text/css" href="../mobi-menu.css">
	<script src="../js/jquery.js" type="text/javascript"></script>
	<link rel="icon" href="../img/favicon.svg" type="image/svg+xml">
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

<link rel="stylesheet" href="../lightzoom/style.css" type="text/css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
</head>
<body>
			<div class="header-contacts">
				<div class="header-tel">
				<img src="../img/cont-tel.png" id="header-telephone-img">
					<span class="header-telephone">
						<span class="header-min-text">Телефон </span><a href="tel:+79114448309">
							<font color="#00CDAE">8-911-444-83-09</font></a>
					</span>
				</div>
				<div class="header-work">
				<img src="../img/cont-worktime.png" id="header-working-time-img">
						<span class="header-working-time">
							<span class="header-min-text">Работаем </span><font color="#00CDAE">
							с 8<sup>00</sup> до 20<sup>00</sup></font>
						</span>
				</div>
				<div class="header-mail">
				<img src="../img/cont-email.png" id="header-email-img">
					<span class="header-email">
						<span class="header-min-text">Эл.почта </span><a href="mailto:metal_92@list.ru">
							<font color="#00CDAE">metal_92@list.ru</font></a>
						</span>
				</div>				
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
  <a class="navbar-brand" href="../main"><img id="logotip" src="../img/logo.jpg"></a>
  <button class="navbar-toggler" id="mobi-menu" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
    <h4>&#9776;</h4>
  </button>
  <div class="collapse navbar-collapse justify-content-center default" id="menu">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../main">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../services">Услуги</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../comments">Отзывы</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../purchase">Скупка</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../market">Рынок</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../articles">Статьи</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../contacts">Контакты</a>
      </li>
    </ul>
  </div>
</nav>


	<div class="wrapper">
	<header>
		<h1>Добавление обратного талона МСЭ в РМИС ВО</h1>
	</header>
	<div class="content">
	<article>
		<h3>При проблеме сохранения ПОВТОРНОГО направления на МСЭ, без введенного обратного талона делаем следующее:</h3><br><br>
		<ol>
			<li>Входим под своей учетной записью в РМИС ВО<br><br><img src="../img/instructions/obratnii_mse_1.png" alt="Вход в РМИС ВО" width="1174" class="instruction__img_width"><br><br></li>
			<li>Сверху нажимаем на кнопку выбора АРМ и выбираем "АРМ МСЭ"<br><br><img src="../img/instructions/obratnii_mse_2.png" alt="Вход в РМИС ВО" width="1174" class="instruction__img_width"><br><br></li>
			<li>В открывшемся журнале АРМ МСЭ нажимаем кнопку "без записи"<br><br><img src="../img/instructions/obratnii_mse_3.png" alt="Вход в РМИС ВО" width="1174" class="instruction__img_width"><br><br></li>
			<li>Далее ищем нужного пациента, выбираем в нижнем окне и нажимаем кнопку "выбрать"<br><br><img src="../img/instructions/obratnii_mse_4.png" alt="Вход в РМИС ВО" width="1174" class="instruction__img_width"><br><br></li>
			<li>В открывшейся форме заполняем обязательные поля: (данные берем со справки об инвалидности)
				<br><br><ul>
					<li>Дата освидетельствования</li>
					<li>Установлена инвалидность</li>
					<li>Причина инвалидности (если установлена какая либо группа инвалидности)</li>
					<li>Причины отказа в установлении инвалидности (если инвалидность не установлена)</li>
				</ul>
				После этого снизу слева нажимаем кнопку "сохранить".<br><br><img src="../img/instructions/obratnii_mse_5.png" alt="Вход в РМИС ВО" width="1174" class="instruction__img_width"><br><br>
			</li>
		</ol>
		<p>Теперь при заполнении повторного направления на МСЭ не будет проблем в связи с отсутствием обратного талона в системе<br><br><img src="../img/instructions/obratnii_mse_6.png" alt="Вход в РМИС ВО" width="1174" class="instruction__img_width"><br><br></p>
			<!-- <p>Осуществляется через авторизацию на портале ГосУслуг медицинского работника</p>
			<p>Для этого:</p>
			<ul>
				<li>Переходим по<a href="https://esia.gosuslugi.ru/login/" target="_blank"><strong>данной ссылке</strong></a>и авторизируемся на портале ГосУслуг под своей учетной записью</li>
				<li>Заходим в Федеральный регистр вакцинированных от Covid-19 по<a href="https://esia.gosuslugi.ru/login/"><strong>данной ссылке</strong></a></li>
			</ul>
			<p>Если всё сделали правильно, то сайт будет выглядеть вот так:</p>
			<img src="../img/vaccine/start_vaccine.png" alt="Корректный вход в регистр">
			<p>После этого, нажимаем на кнопку <strong>Федеральный регистр</strong> затем на кнопку <strong>Регистр вакцинированных от COVID</strong></p>
			<p>Если всё сделали правильно, то Вы попадете на главную страницу регистра:</p>
			<img src="../img/vaccine/main_vaccine.png" alt="Главная страница регистра вакцинированных" width="1174">
			<br><br>
		<h2>Добавление информации о первом этапе вакцинации</h2>
			<p>Для этого:</p>
			<ul>
				<li>Нажимаем на кнопку <img src="../img/vaccine/add_vaccine.png" alt="Добавить"> и у Вас откроется форма добавления нового пациента</li>
				<br><img src="../img/vaccine/new_pacient.png" alt="Новый пациент" width="1174">

 				<li>далее <strong>ОБЯЗАТЕЛЬНО</strong> начинаем вносить информацию с помощью кнопки <img src="../img/vaccine/find_erz_vaccine.png" alt="Поиск в ЕРЗ"></li>
				 <p>Находим пациента по ЕНП (единому номеру полиса) , либо если полис отсутствует то ставим галочку "Номер полиса ЕНП отсутствует" и вводим поля СНИЛС, ФИО, Дата рождения. Если в каком то поле будет ошибка, система не найдет человека, и дальнейшая внесенная информация о вакцинации будет некорректна.</p>
			</ul> -->
	</article>
	</div>
	<footer>
		<div class="footer-contacts">
			<div class="footer-logo"><img src="../img/footer-logo.jpg" alt="" width="80%"></div>
			<div class="footer-categories">
				<span class="footerh3">Услуги</span>
				<br>
				<a href="../service/repairpc" class="footer-href">Ремонт компьютеров</a>
				<br>
				<a href="../service/repairnotebooks" class="footer-href">Ремонт ноутбуков</a>
				<br>
				<a href="../service/repairphones" class="footer-href">Ремонт телефонов</a>
				<br>
				<a href="../service/repairtablets" class="footer-href">Ремонт планшетов</a>
				<br>
				<a href="../service/repairtv" class="footer-href">Ремонт телевизоров</a>
				<br>
				<a href="../service/otherservices" class="footer-href">Другие услуги</a>
			</div>
			<div class="footer-guard">
				<span class="footerh3">Меню</span>
				<br>
				<a href="../main" class="footer-href">Главная</a>
				<br>
				<a href="../comments" class="footer-href">Отзывы</a>
				<br>
				<a href="../purchase" class="footer-href">Скупка</a>
				<br>
				<a href="../market" class="footer-href">Рынок</a>
				<br>
				<a href="../articles" class="footer-href">Статьи</a>
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
				echo '<a title="Viber" class="social-img" href="viber://add?number=79114448309"><img src="../img/viber.png" alt="" width="30px"></a>';              
 				else :
 	 			echo '<a title="Viber" class="social-img" href="viber://chat?number=+79114448309"><img src="../img/viber.png" alt="" width="30px"></a>';
 				endif; ?>

 				<a href="https://wa.me/79114448309?text=Сообщение%20needcom" title="Поделиться в WhatsApp" target="_blank" class="social-img"><img src="../img/whatsapp.png" alt="" width="30px"></a>

 				<a href="https://telegram.im/@smilevpn" target="_blank" class="social-img"><img src="../img/telegram.png" alt="" width="30px"></a>

				<a href="https://vk.com/id5436634" target="_blank" class="social-img"><img src="../img/vk.png" alt="" width="30px"></a>

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

<script type="text/javascript" src="../lightzoom/lightzoom.js"></script>

<script type="text/javascript">

    ;( function( $ ) {

 $( '.lightzoom' ).lightzoom( {
   speed:                 400,   // скорость появления
   imgPadding:            10,    // значение отступа у изображения
   overlayOpacity:        '0.5', // прозрачность фона (от 0 до 1)
   viewTitle:             false, // true, если надо показывать подпись к изобажению
   isOverlayClickClosing: false, // true, если надо закрывать окно при клике по затемненной области
   isWindowClickClosing:  true, // true, если надо закрывать окно при клике по любой области
   isEscClosing:          true, // true, если надо закрывать окно при нажатии на кнопку Esc
   boxClass:              '',    // позволяет задавать класс окну обертке (с версии 1.1.0)
   overlayColor:          '',    // позволяет задавать цвет фону (с версии 1.1.0)
   titleColor:            '',    // позволяет задавать цвет подписи (с версии 1.1.0)
 } );

} )( jQuery ); 
    
</script>
<script type="text/javascript">
  jQuery('.lightzoom').lightzoom();
</script> 

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
