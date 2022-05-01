<?php 
    session_start();
    include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	header('Content-type: text/html; charset=utf-8');       

    if(!$user_data['user_id'])
    {
        header('Location: login.php');
    }

    //$news1 = mysql_fetch_array(mysql_query("SELECT * FROM `news` WHERE id='1'"));

    

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Едитор новосетй</title>
    <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="assets/images/index-meta.png">
  <meta property="og:image" content="assets/images/index-meta.png">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/icon-2.png" type="image/x-icon">
    <link rel="stylesheet" href="ind.css">
    <link rel="stylesheet" href="panel.css">
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

                        <img src="assets/images/icon-2.png" alt=""
                            style="border-radius:5px; box-shadow: 1px 1px 10px 1px;height: 3rem;">

                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7"
                            href="index">The Foxing</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                    data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                                href="index.php#how-to-go" data-bs-auto-close="outside" aria-expanded="false">Как начать</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                                href="information.php">Инфо</a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                                href="https://discord.gg/QR9whFRWtG" target="_blank">Тех.Гильдия</a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="forum.html"
                                data-bs-auto-close="outside" aria-expanded="false">Fорум</a></li>
                        </li>
                    </ul>

                    <div class="navbar-buttons mbr-section-btn"><a class="btn btn-secondary display-4"
                            href="https://discord.com/api/oauth2/authorize?client_id=771279659807277066&permissions=8&scope=bot"
                            target="_blank">Добавить в гильдию</a></div>
                </div>
            </div>
        </nav>
    </section>
    <br>
    <br>
    <br>
    <br>
    <h1 style="text-align: center;"><strong>Добавление новостей</strong></h1>
    <br>
    <form action="adddb.php" method="post">
    <div class="chs">
        <div class="one">
            <p style="margin-left: 10%">Ссылка на фото</p>
            <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="url">
                <input type="urls" name="url" style="width: 80%; margin-left: 10%" placeholder="Ссылка на фото" data-form-field="url" class="form-control" value="" id="url-form7-2">                      
            </div>
            <p style="margin-left: 10%">Дата</p>
            <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="date">
                <input type="text" maxlength="20" name="date" style="width: 80%; margin-left: 10%" placeholder="Дата" data-form-field="date" class="form-control" value="" id="date-form7-2">                             
            
            </div>
            <p style="margin-left: 10%">Заголовок</p>
            <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="title">
                <input type="title" maxlength="30" name="title" style="width: 80%; margin-left: 10%" placeholder="Заголовок" data-form-field="title" class="form-control" value="" id="title-form7-2">
            </div>
            <br>
            <p style="margin-left: 10%">Описание</p>
            <textarea id="pole" style="width: 80%; margin-left: 10%; height: 30%" class="form-control" name="opis" cols="1" id="opis-form7-2" rows="5"></textarea>                         
        </div>
    </div>
    <div class="dd">
    <div style="margin-left: 5px;" class="col-auto vhod knopkavhod mbr-section-btn align-center"><button><input type="button" onclick="otmena()" class="btn btn-secondary display-4" value="Отменить"></button></div>
            <input style="display: none;" name="request" value="approved" type="text">
            <div style="margin-right: 5px;" class="col-auto vhod knopkavhod mbr-section-btn align-center"><button><input type="submit" class="btn btn-secondary display-4" value="Добавить новость" name="request" onclick="prim()"></button></div>
    </div>
    </form>
    <br>
    <script>
        function otmena() {
            let k = confirm(`Вы действительно хотите отменить изменения?`)
            if(k === true) {
               setTimeout('location="/panel.php";', 1);
            } else {
                return false;
            }
    }
    </script>
    <br>
    <h1 style="text-align: center; margin-bottom: -6%;"><strong>Предпросмотр</strong></h1>
    <section data-bs-version="5" class="timeline3 cid-t2ADGClLPJ" id="timeline3-9">
    <div class="container">
        <div class="timelines-container mt-4">
            <div class="row timeline-element first-separline mb-5">
                <div class="timeline-date col-12">
                    <div class="timeline-date-wrapper">
                        <p style="text-align: center;" class="mbr-timeline-date display-7 texxxxt"></p>
                        <script>
                            setInterval(() => {
                                let txt = document.querySelector(`.texxxxt`)
                                let p = document.querySelector(`#date-form7-2`)

                                txt.innerHTML = p.value
                            }, 1);
                        </script>
                    </div>
                </div>
                <span class="iconBackground"></span>
                <div class="col-12 col-md-6">
                    <div class="image-wrapper">
                    <img style="border-radius:5px; box-shadow: 1px 1px 10px 1px;" id="izmenafoto" src="" alt=""
                            title="">
                        <script>
                            setInterval(() => {
                                let f = document.querySelector('#izmenafoto');
                                let h = document.querySelector('#url-form7-2');

                                f.src = h.value
                            });
                        </script>
                    </div>
                </div>
                <script>
                    setInterval(() => { 
                        let s = document.querySelector(`#title-form7-2`)
                        let txt = document.querySelector(`.tt`)
                        txt.innerHTML = s.value
                    }, 1);
                </script>
                <div class="col-12 col-md-6">
                    <div class="timeline-text-wrapper">
                        <h4 class="mbr-timeline-title mbr-fonts-style mb-0 display-5"><strong class="tt"></strong></h4>
                        <p class="teeeeeeeext mbr-text mbr-fonts-style mt-3 mb-0 display-7"></p>

                        <script>
                            setInterval(() => {
                                let txt = document.querySelector(`.teeeeeeeext`)
                                let p = document.querySelector(`#pole`)

                                txt.innerHTML = p.value.replace(/\n/g, '<br/>');
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body> 
</html>