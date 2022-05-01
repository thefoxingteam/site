<?php 

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
if(!$user_data) {
    header('Location: login.php');
}
header('Content-type: text/html; charset=utf-8');    
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $sql = "DELETE  FROM `news` ORDER BY `number` DESC LIMIT 1";
    mysqli_query($con, $sql);
    
    $q = $_POST['date'];
    $w = $_POST['title'];
    $e = $_POST['opis'];
    $r = $_POST['url'];
    
    $query = "insert into news (date,title,description,url) values ('$q','$w','$e','$r')";
    mysqli_query($con, $query);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succesfully</title>
    <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="assets/images/index-meta.png">
  <meta property="og:image" content="assets/images/index-meta.png">
  <meta name="twitter:title" content="Главная | TheFoxing">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/icon-2.png" type="image/x-icon">
    <link rel="stylesheet" href="ind.css">
</head>
<body>
    <br>
    <h1 style="text-align: center;">Успешно.</h1>
    <h3 class="j1111" style="text-align: center;">Применяются правки, ждём секунд.</h3>
    <script>
        let g = document.querySelector('.j1111')
        setTimeout(() => {
            g.innerHTML = 'Применяются правки, ждём 3 секунды.'
            setTimeout(() => {
                g.innerHTML = 'Применяются правки, ждём 2 секунды.'
                setTimeout(() => {
                    g.innerHTML = 'Применяются правки, ждём 1 секунду.'
                    setTimeout('location="/panel.php";', 1);
                }, 1000);
            }, 1000);
        }, 1000);
    </script>
</body>
</html>