<?php
include "baglan.php";
session_start();
$favoriler = "";
$mesaj = "";
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <title>XYZ Media - Favori Ekleme</title>
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
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/anlik-arama.js" type="text/javascript"></script>


    <!--===============================================================================================-->
</head>

<body style="background-color:grey;">

    <?php require('navbar.php'); ?>

    <body style="background:#DCDCDC;">


        <div class="container" style="background:silver;">
            <div class="row">

                <div class="col-md-12 col-lg-12">

                    <?php

if(!isset($_SESSION["login"])){

	echo "<div class='alert alert-danger'> HATA OLUŞTU.! LÜTFEN GİRİŞ YAPIN </div>";
    }
    else {

		$user_id = $_SESSION['id']; 
		$icerik = $_GET['id'];
	
			$kontrol = $baglan->query("SELECT * FROM favoriler WHERE hesapid='$user_id' AND yaziid='$icerik'");
			## kontrol için koşul belirttik.
			if(mysqli_num_rows($kontrol) > 0)
			 {
				echo "<div class='alert alert-danger'> YAZI FAVORİLERE EKLİ! </div>";
				}
				else {

					$baglan->query("INSERT INTO favoriler (hesapid, yaziid) VALUES ('$user_id', '$icerik')");
					echo "<div class='alert alert-success'>FAVORİLER EKLENDİ! </div>"
					;
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