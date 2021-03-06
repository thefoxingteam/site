<?php 
session_start();

	include("connection.php");
	include("functions.php");

	header('Content-type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.4.0, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.4.0, mobirise.com">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="assets/images/information-meta.png">
    <meta property="og:image" content="assets/images/information-meta.png">
    <meta name="twitter:title" content="Информация | TheFoxing">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/icon-2.png" type="image/x-icon">
    <meta name="description"
        content="Информация о боте TheFoxing. Разработчики, функционал и команды бота. Всё вы найдёте именно на этой странице.">


    <title>Информация | TheFoxing</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/animatecss/animate.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload"
        href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
    </noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">




</head>

<body>

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
    <section data-bs-version="5" class="features1 cid-t2ANEdQpEg" id="menu">



        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Информация</strong>
                    </h3>

                </div>
            </div>
            <div class="row">
                <div class="card col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <div class="iconfont-wrapper">
                                <a href="#sostav"><span class="mbr-iconfont mobi-mbri-code mobi-mbri"
                                        style="color: rgb(228, 63, 63); fill: rgb(228, 63, 63);"></span></a>
                            </div>
                            <h5 class="card-title mbr-fonts-style display-7"><strong>Rазработчик и команда</strong></h5>
                            <p class="card-text mbr-fonts-style display-7">Люди которые относятся к
                                боту.<br>(Разработчик бота, Администрация гильдии, мастера кодинга)</p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <div class="iconfont-wrapper">
                                <a href="#bot"></a><span class="mbr-iconfont mobi-mbri-responsive-2 mobi-mbri"
                                    style="color: rgb(228, 63, 63); fill: rgb(228, 63, 63);"></span></a>
                            </div>
                            <h5 class="card-title mbr-fonts-style display-7"><strong>Инфо бота</strong></h5>
                            <p class="card-text mbr-fonts-style display-7">Небольшая информация о боте</p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <div class="iconfont-wrapper">
                                <a href="#news"></a><span class="mbr-iconfont mobi-mbri-update mobi-mbri"
                                    style="color: rgb(228, 63, 63); fill: rgb(228, 63, 63);"></span></a>
                            </div>
                            <h5 class="card-title mbr-fonts-style display-7"><strong>Nовости</strong></h5>
                            <p class="card-text mbr-fonts-style display-7">Все последние 10 новостей бота.<br>(Чтобы
                                увидеть большее количество новостей, зайдите на форум и выберите вкладку "Новости")</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section data-bs-version="5" class="tabs content18 cid-t2AWARuEV9" id="tabs1-i">




        <div class="container-fluid" id="sostav">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2 animate__animated animate__delay-1s animate__fadeInUp"><strong>Rазработчики и команда</strong></h3>
                    
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-md-8">
                    <ul class="nav nav-tabs mb-4" role="tablist">
                        <li class="nav-item first mbr-fonts-style animate__animated animate__delay-1s animate__fadeInUp"><a class="nav-link mbr-fonts-style show display-7 animate__animated animate__delay-1s animate__fadeInUp active" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs1-i_tab0" aria-selected="true"><strong>Rазработчик</strong></a></li>
                        <li class="nav-item animate__animated animate__delay-1s animate__fadeInUp"><a class="nav-link mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs1-i_tab1" aria-selected="false"><strong>Администраторы</strong><strong><br></strong></a></li>
                        <li class="nav-item animate__animated animate__delay-1s animate__fadeInUp"><a class="nav-link mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs1-i_tab2" aria-selected="false"><strong>Модераторы</strong></a></li>
                        
                        
                        
                    </ul>
                    <div class="tab-content">
                        <div id="tabs1-i_tab0" class="tab-pane active" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="mbr-text mbr-fonts-style display-7">Разработчик как сайта, так и бота - один человек. Связь с разработчиком:<br>Discord Tag:&nbsp;<a href="https://discord.com/channels/@me/740590922869374998" class="text-primary" target="_blank">var i;#9064</a>&nbsp;<br>Instagram: <a href="https://www.instagram.com/xyz.qwrt/" class="text-primary" target="_blank">xyz.qwrt</a><a href="https://www.instagram.com/xyz.qwrt/" class="text-primary" target="_blank"><br></a><br></p>
                                </div>
                            </div>
                        </div>
                        <div id="tabs1-i_tab1" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        На данный момент, на постах Администраторов никого нет...<br>Чтобы подать заявку, перейдите на <a href="nabor" class="text-primary">эту страницу</a>, либо зайдите на форум, и выберите вкладку "Набор".<br></p>
                                </div>
                            </div>
                        </div>
                        <div id="tabs1-i_tab2" class="tab-pane in" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        На данный момент, на постах Модераторов никого нет...<br>Чтобы подать заявку, перейдите на <a href="nabor" class="text-primary">эту страницу</a>, либо зайдите на форум, и выберите вкладку "Набор".</p>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5" class="testimonials1 cid-t2B0GFElzb" id="bot">



        <div class="container">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>Инфо бота</strong></h3>
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="image-wrapper">
                        <img src="assets/images/help-1-529x634.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md">
                    <div class="text-wrapper">
                        <p class="mbr-text mbr-fonts-style mb-4 display-7">Все доступные людям команды вы видите слева
                            (либо сверху).<br>Главный префикс бота: p.<br><br>~ Если вы желаете посмотреть как правильно
                            писать команды модерации (к примеру как заткнуть пользователя), пропишите пустую команду (к
                            примеру p.mute), и бот выдаст Вам embed-сообщение, где будет сказано как правильно
                            использовать команду (такое работает со всеми командами).</p>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5" class="timeline3 cid-t2ByeNExO3" id="news">


    <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Nовости</strong></h3>

            </div>
    <?php   
    mysql_query ("set_client='utf8'");//Следующие 4 строки решают проблему с кодировкой.
    mysql_query ("set character_set_results='utf8'");
    mysql_query ("set collation_connection='utf8_general_ci'");
    mysql_query ("SET NAMES utf8");
 
    $result = mysqli_query($con, "SELECT * FROM `news` ORDER BY `number` DESC LIMIT 10");
     // получаем все строки в цикле по одной
    while($row = mysqli_fetch_assoc($result))
    {
    echo '<div class="timelines-container mt-4">
                <div class="row timeline-element first-separline mb-5">
                    <div class="timeline-date col-12">
                        <div class="timeline-date-wrapper">
                            <p class="mbr-timeline-date display-7">'.$row['date'].'</p>
                        </div>
                    </div>
                    <span class="iconBackground"></span>
                    <div class="col-12 col-md-6">
                        <div class="image-wrapper">
                            <img src="'.$row['url'].'" alt="" title="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="timeline-text-wrapper">
                            <h4 class="mbr-timeline-title mbr-fonts-style mb-0 display-5"><strong>'.$row['title'].'</strong></h4>
                            <p class="mbr-text mbr-fonts-style mt-3 mb-0 display-7">'.$row['description'].'</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        echo '<br><br>';
    }
        ?>
    </section>

    <section data-bs-version="5" class="footer7 cid-t2ABsBobxh" once="footers" id="footer7-f">





        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">Copyright 2022 © TF Team - All Rights Reserved.
                    </p>
                    <a href="login.php" class="mbr-text mb-0 mbr-fonts-style display-7">Admin Panel</a>
                </div>
            </div>
        </div>

    </section>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/ytplayer/index.js"></script>

    <script src="assets/formoid/formoid.min.js"></script>

    <input name="animation" type="hidden">
</body>

</html>