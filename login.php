<?php 
session_start();

	include("connection.php");
	include("functions.php");

	header('Content-type: text/html; charset=utf-8');      

    $user_data = check_login($con);
    if($user_data)
    {
        header('Location: panel.php');
    }
    


    
if($_SERVER['REQUEST_METHOD'] == "POST")
    {
       
            
            $errorr = 'error';
            $user_name = $_POST['login'];
            $password = $_POST['password'];
            $email = $_POST['email'];
                                
            if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($email))
            {
                                
                                            
                $query = "select * from users where user_name = '$user_name' limit 1";
                $result = mysqli_query($con, $query);
                                
                if($result)
                {
                    if($result && mysqli_num_rows($result) > 0)
                    {
                                
                        $user_data = mysqli_fetch_assoc($result);
                        if($user_data['email'] === $email) 
                        {                       
                            if($user_data['password'] === $password)
                            {
                                 
                                $_SESSION['user_id'] = $user_data['user_id'];
                                header('Location: panel.php');
                                die;
                            }
                        }
                    }
                }
                                            
                $erar = 'Имя пользователя или пароль не верны!';
                require_once('login.php');
            }else{
                $erar = 'Имя пользователя или пароль не верны!';
                require_once('login.php');
                
            }
        }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="assets/images/index-meta.png">
    <meta property="og:image" content="assets/images/index-meta.png">
    <meta name="twitter:title" content="Главная | TheFoxing">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/icon-2.png" type="image/x-icon">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="ind.css">
    <meta name="description" content="Вход">


    <title>Login | TheFoxing</title>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>



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

    <section data-bs-version="5" class="form7 cid-t4tRfmIjfR" id="form7-2">


        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>
                        <p style="margin-top: 10px; margin-bottom: -20px;">APanel</p>
                    </strong>
                </h3>

            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 mx-auto mbr-form">
                    <form action="login.php" method="post">
                        <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
                            Если у Вас есть доступ к АПанели, введите следующие данные</p>
                        <div class="dragArea row">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                                <input type="email" name="email" placeholder="EMail" data-form-field="email"
                                    class="form-control" value="" id="email-form7-2">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="login">
                                <input type="login" name="login" placeholder="Логин" data-form-field="login"
                                    class="form-control" value="" id="login-form7-2">
                            </div>
                            <div data-for="password" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                                <input style="font: small-caption;font-size: 16px;" type="password" name="password"
                                    placeholder="Пароль" data-form-field="password" class="form-control" value=""
                                    id="pass-form7-2">
                            </div>
                        </div>
                        <div align="center" class="cap">
                            <div align="center" class="g-recaptcha"
                                data-sitekey="6LdkOLQfAAAAAMTDsb0V0PRSpRpt1ahbS-AnKfhY"></div>
                            <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
                                async defer>
                                </script>

                            <div align="center" style="text-align:center; justify-content: center;"
                                class="col-auto checkcap mbr-section-btn align-center"><input type="button"
                                    onclick="d(this)" class="btn btn-secondary display-4" value="Проверить капчу"></div>
                            <script>
                                function d(iii) {
                                    if (grecaptcha.getResponse() == "") {
                                        alert(`Вы не прошли проверку.`)
                                    } else {
                                        let cap = document.querySelector(`.cap`)
                                        cap.classList.add(`un`)
                                        alert(`Упешно!`)
                                        let v = document.querySelector(`.knopkavhod`)
                                        v.classList.add(`active`)
                                    }
                                }
                            </script>
                        </div>

                        <div class="col-auto vhod knopkavhod mbr-section-btn align-center"><button><input type="submit"
                                    id="checking" class="btn btn-secondary display-4" value="Войти"></button></div>
                                    <p>Если при входе сайт перекидывает Вас на эту страницу - данные в форме не верны.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section data-bs-version="5" class="footer7 ujdhfsd cid-t2ABsBobxh" once="footers" id="footer7-6">





        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">Copyright 2022 © TF Team - All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>

    </section>

</body>

</html>