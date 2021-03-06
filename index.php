<?php 
session_start();

	include("connection.php");
	include("functions.php");

	header('Content-type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.4.0, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="assets/images/index-meta.png">
  <meta property="og:image" content="assets/images/index-meta.png">
  <meta name="twitter:title" content="Главная | TheFoxing">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/icon-2.png" type="image/x-icon">
  <meta name="description" content="Сайт бота TheFoxing. Здесь присутствует инструкция, связь с Администрацией, новости и форум.">
  
  
  <title>Главная | TheFoxing</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="noedit.css">
  
  
  
</head>
<body id="particles-js">    
  <div class="preloader">
            <div class="preloader__txt">
                <p><span>~ Hello ~</span></p>
                <p>Идёт загрузка сайта, пожалуйста, подождите.</p>
            </div>
            <svg class="preloader__image" role="img" xmlns="" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z">
              </path>
            </svg>
          </div>
          <script>
            window.onload = function () {
              document.body.classList.add('loaded_hiding');
              window.setTimeout(function () {
                document.body.classList.add('loaded');
                document.body.classList.remove('loaded_hiding');
              }, 1000);
            }
          </script>

<section data-bs-version="5" class="menu menu2 cid-t2AnNcyJKQ" once="" id="menu2-2">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <link rel="stylesheet" href="ind.css">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    
                        <img src="assets/images/icon-2.png" alt="" style="border-radius:5px; box-shadow: 1px 1px 10px 1px;height: 3rem;">
                    
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7" href="index">The Foxing</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="index.php#how-to-go" data-bs-auto-close="outside" aria-expanded="false">Как начать</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="information.php">Инфо</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="https://discord.gg/QR9whFRWtG" target="_blank">Тех.Гильдия</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="forum.html" data-bs-auto-close="outside" aria-expanded="false">Fорум</a></li></li>
                </ul>
                
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-secondary display-4" href="https://discord.com/api/oauth2/authorize?client_id=771279659807277066&permissions=8&scope=bot" target="_blank">Добавить в гильдию</a></div>
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5" class="header11 cid-t2AlBAovYv" id="header11-0">

    

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 image-wrapper">
                <img class="w-100" src="assets/images/icon-1.png" alt="" style="border-radius: 10px; box-shadow: 2px 2px 20px 2px;">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Лиса "Альфа"</strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">Помощник гильдий в приложении Discord.<br>Начни свою жизнь с нами!</p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-7" href="index#how-to-go">Начать</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5" class="features20 cid-t2Ap2N4woc" id="how-to-go">

    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9">
                <div class="card-wrapper mb-4">
                    <div class="card-box align-center">
                        <h4 class="card-title mbr-fonts-style mb-4 display-2"><strong>Как начать</strong></h4>
                        <p class="mbr-text mbr-fonts-style mb-4 display-7">В установке бота нет ничего сложного, ведь весь процесс автоматический.<br></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="item mbr-flex">
                    <div class="icon-wrap w-100">
                        <div class="icon-box">
                            <span class="step-number mbr-fonts-style display-5">1</span>
                        </div>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7">
                            <strong>Гильдия</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Добавьте меня в гильдию. Для этого достаточно нажать на красную кнопку, она находится в верхнем правом углу.<br>(Если у Вас моб. версия, в верхнем правом углу откройте меню и нажмите на красную кнопку)</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-wrap w-100">
                        <div class="icon-box">
                            <span class="step-number mbr-fonts-style display-5">2</span>
                        </div>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7"><strong>Права Владельца</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Чтобы не было ошибок, устанавливайте систему бота самостоятельно.<br>(Имеется ввиду чтобы Вы были Владельцем гильдии)</h5>
                    </div>
                </div>
                <div class="item mbr-flex last">
                    <div class="icon-wrap w-100">
                        <div class="icon-box">
                            <span class="step-number mbr-fonts-style display-5">3</span>
                        </div>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7"><strong>Система Бота</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">По добавлению бота, вам должно прийти уведомление в какой-либо канал гильдии.<br>Следуйте по инструкции которую бот будет отсылать вам.</h5>
                    </div>
                </div>
                
                
                
                
                
                
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5" class="timeline3 cid-t2ADGClLPJ" id="timeline3-9">
<?php 
    mysql_query ("set_client='utf8'");//Следующие 4 строки решают проблему с кодировкой.
    mysql_query ("set character_set_results='utf8'");
    mysql_query ("set collation_connection='utf8_general_ci'");
    mysql_query ("SET NAMES utf8");
 
    $result = mysqli_query($con, "SELECT * FROM `news` ORDER BY `number` DESC");
    $row = mysqli_fetch_assoc($result); // получаем все строки в цикле по одной
    ?>
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Nовости</strong></h3>
            
        </div>
        <div class="timelines-container mt-4">
            <div class="row timeline-element first-separline mb-5">
                <div class="timeline-date col-12">
                    <div class="timeline-date-wrapper">
                        <p class="mbr-timeline-date display-7"><?php echo $row['date'] ?></p>
                    </div>
                </div>
                <span class="iconBackground"></span>
                <div class="col-12 col-md-6">
                    <div class="image-wrapper">
                    <?php echo '<img style="border-radius:5px; box-shadow: 1px 1px 10px 1px;" src="'. $row['url']. '">'; ?>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="timeline-text-wrapper">
                        <h4 class="mbr-timeline-title mbr-fonts-style mb-0 display-5"><strong><?php echo $row['title'] ?></strong></h4>
                        <p class="mbr-text mbr-fonts-style mt-3 mb-0 display-7"><?php echo $row['description'] ?></p>
                    </div>
                </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
        </div>
    </div>
</section>

<section data-bs-version="5" class="footer7 cid-t2ABsBobxh" once="footers" id="footer7-6">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">Copyright 2022 © TF Team - All Rights Reserved.</p>
                <a href="login.php" class="mbr-text mb-0 mbr-fonts-style display-7">Admin Panel</a>
            </div>
        </div>
    </div>

</section>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  
<script src="assets/smoothscroll/smooth-scroll.js"></script>  
<script src="assets/ytplayer/index.js"></script>  
  
<script src="assets/formoid/formoid.min.js"></script> 
  
  

</html>