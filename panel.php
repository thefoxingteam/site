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

    //$news1 = mysql_fetch_array(mysql_query("SELECT * FROM `news_1` WHERE post_title='3'"));

?>
<?php 
                mysql_query ("set_client='utf8'");//Следующие 4 строки решают проблему с кодировкой.
                mysql_query ("set character_set_results='utf8'");
                mysql_query ("set collation_connection='utf8_general_ci'");
                 mysql_query ("SET NAMES utf8");
 
                 $result = mysqli_query($con, "SELECT * FROM `news` ORDER BY `number` DESC");
                $row = mysqli_fetch_assoc($result); // получаем все строки в цикле по одной
                ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель Управления</title>
    <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="assets/images/index-meta.png">
  <meta property="og:image" content="assets/images/index-meta.png">
  <meta name="twitter:title" content="Главная | TheFoxing">
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
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
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
<br>
<br>
<br>
<br>
    <h1 style="text-align: center;"><strong>APanel</strong></h1>
    <h3 style="text-align: center;"><strong>Вы в полном праве руководить новостями</strong></h3>
    <br>
    <br>
    <section data-bs-version="5" class="timeline3 cid-t2ADGClLPJ" id="timeline3-9">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Последняя новость</strong></h3>
            <div align="center" class="dd">
                <script>
                    function del() {
                        let c = confirm('Вы действительно хотите удалить последнюю новость?')
                        if(c === true) {
                            setTimeout('location="/deletenews.php";', 1);
                        }
                    }
                    function exit() {
                        let c = confirm('Вы действительно хотите выйти из этого аккаунта?')
                        if(c === true) {
                            setTimeout('location="/logout.php";', 1);
                        }
                    }
                    function editable() {
                        setTimeout('location="/editor.php";', 1);
                    }
                    function addnews() {
                        setTimeout('location="/addnews.php";', 1);
                    }
                </script>
                <?php 
                    mysql_query ("set_client='utf8'");//Следующие 4 строки решают проблему с кодировкой.
                    mysql_query ("set character_set_results='utf8'");
                    mysql_query ("set collation_connection='utf8_general_ci'");
                    mysql_query ("SET NAMES utf8");
 
                    $result = mysqli_query($con, "SELECT * FROM `news` ORDER BY `number` DESC");
                    $row = mysqli_fetch_assoc($result); // получаем все строки в цикле по одной
                ?>
                <div style="margin-right: 5px;" class="col-auto vhod knopkavhod mbr-section-btn align-center"><input type="button" onclick="del()" class="btn btn-secondary display-4" value="Удалить"></div>
                    <div style="margin-left: 5px;" class="col-auto vhod knopkavhod mbr-section-btn align-center"><input onclick="editable()" type="button" class="btn btn-secondary display-4" value="Изменить"></div>
            </div>        
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
                        <?php echo '<img style="border-radius:5px; box-shadow: 1px 1px 10px 1px;" src="'.$row['url'].'" alt="" title="">'?>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="timeline-text-wrapper">
                        <h4 class="mbr-timeline-title mbr-fonts-style mb-0 display-5"><strong><?php echo $row['title']?></strong></h4>
                        <p class="mbr-text mbr-fonts-style mt-3 mb-0 display-7"><?php echo $row['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="apanel">
    <div class="d">
        <h4 style="text-align: center;"><strong>Прочие действия:</strong></h4>
        <div align="center" class="dd">
            <div style="margin-right: 5px;" class="col-auto vhod knopkavhod mbr-section-btn align-center"><input type="button" onclick="addnews()" class="btn btn-secondary display-4" value="Добавить новость"></div>
            <div style="margin-left: 5px;" class="col-auto vhod knopkavhod mbr-section-btn align-center"><input type="button" onclick="exit()" class="btn btn-secondary display-4" value="Выход"></div>
            </div>
    </div>
    <br>
    <br>
</div>


    <section data-bs-version="5" class="footer7 cid-t2ABsBobxh" once="footers" id="footer7-6">
        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">Copyright 2022 © TF Team - All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  
</body>
</html>