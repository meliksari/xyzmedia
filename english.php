<?php
include "baglan.php";
session_start();
$engyazilar = "";

if(!isset($_SESSION["login"])){

    header("location: index.php");
  
    }
    else {




$get_recent = $baglan->query("SELECT * FROM yazi WHERE dil='en'");
	
if($get_recent->num_rows) {
    
    while($row = $get_recent->fetch_assoc()) {
        
            
            $engyazilar.= "

            <hr class='featurette-divider'>

            <div class='row featurette'>
          <div class='col-md-7 order-md-2'>
            <h2 class='featurette-heading'>".$row['baslik']."</h2>
            <p class='lead'>".substr($row['ozet'], 0, 125)."....</p>
            <p class='lead mb-0'> <a href='detay.php?blogid=".$row['id']."' class='text-success font-weight-bold'>Look!</a></p>
          </div>
          <div class='col-md-5 order-md-1'>
            <img class='featurette-image img-fluid mx-auto' src='images/icerikler/".$row['id'].".png' height='350' width='350' alt='RESİM'>
          </div>

        </div>";
    
}

}

    }
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <title>XYZ Media - English</title>
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

                <div class="container mt-2" style="max-width: 500px">
                    <input type="text" class="form-control" name="anlik-arama" id="anlik-arama" autocomplete="off"
                    placeholder="ARAMA KUTUSU">
                    <div id="search_result"></div>
                </div>


                <div class="col-md-12 col-lg-12">



                    <hr class="featurette-divider">


                    <?php echo ($engyazilar == "") ? "<h3 style=' text-align: center; font-weight: lighter; padding: 10px 0px; background: #ffeeee; color: #333;'>Yetki Yok!</h3>" : $engyazilar; ?>
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