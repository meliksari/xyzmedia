<?php
include "baglan.php";
session_start();
ob_start();

?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <title>XYZ Media - GİRİŞ BAŞARILI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link href="css/signin.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <!--===============================================================================================-->


</head>
<body style="background-color:grey;">
    <body style="background:#DCDCDC;">


        <div class="container" style="background:silver;">
            <div class="row">

                <div class="col-md-12 col-lg-12">
                <img class="mb-4" src="images/logo.png" alt="" width="250" height="250">
                <?php

$baglan= mysqli_connect("localhost","root","","xyzmedia");

if (!$baglan) {
    echo "Hata: MySQL'e bağlanılamadı." . PHP_EOL;
    exit;
}

mysqli_set_charset($baglan,"utf8");

$m = $_POST['mail'];
$s = $_POST['sifre'];
$sql="SELECT * FROM hesaplar WHERE mail='$m' AND sifre='$s'";


$sonuc= mysqli_query($baglan, $sql);

if(!$sonuc){
    echo ("Hata:".$baglan->error);
    exit;
} else {

    $kayitsayisi=mysqli_num_rows($sonuc);
    if($kayitsayisi>0)
    {

        $kayit=mysqli_fetch_array($sonuc);
        $adi =$kayit['ad'];
        $soyadi=$kayit['soyad'];
        $user_id=$kayit['id'];
        echo " <div class='alert alert-success'> Sayın $adi $soyadi Hoş geldiniz.<br> </div>";

        $_SESSION["login"] = "true";
        $_SESSION['ad']=$adi;
        $_SESSION['id']= $user_id;
        $_SESSION['soyad']=$soyadi;
        echo " <div class='alert alert-success'> ANASAYFA YÖNLENDİRİLİYORSUNUZ.! </div>";

        header( "refresh:2;url=anasayfa.php" );

    } else {
        echo " <div class='alert alert-danger'> GİRİLEN BİLGİ HATALI </div>";

        header( "refresh:2;url=index.php"   );

    }
}


?>


                
                    <p class="clear"></p>


                    <div class="clearfix"></div>
                </div>
            </div>
        </div>



    </body>



    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>