<?php
include "baglan.php";
session_start();
$yazilar = "";

if(!isset($_SESSION["login"])){

    header("location: index.php");
  
    }


    else {

	$baslik = "";
	$icerik = "";
	$id = "";
    $seo = "";
	
	if($_SERVER['REQUEST_METHOD'] == 'GET') {
		
		if(isset($_GET['blogid']) && preg_replace("#[^0-9]#", "", $_GET['blogid']) != "") {
			
			$blogid = preg_replace("#[^0-9]#", "", $_GET['blogid']);
			
			if($blogid != "") {
				
				$get_detail = $baglan->query("SELECT * FROM yazi WHERE id='".$blogid."' LIMIT 1");
				
				if($get_detail->num_rows) {
					
					while($row = $get_detail->fetch_assoc()) {
						
						$id = $row['id'];
						$baslik = $row['baslik'];
						$icerik = $row['icerik'];
                        $seo = $row['seo'];
				
					}
					
				}else{
					
					header("location: index.php");
					
				}
				
			}
			
		}else{
			
			echo "test";
			
		}
		
	}
	
		
}	

	
?>



<!DOCTYPE html>
<html lang="tr">

<head>
    <title> <?php echo $baslik; ?></title>
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
    <meta name="keywords" content="<?php echo $seo; ?>" />
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

                <div class="col-lg-14">
                    <article>
                        <header class="mb-4">
                            <h1 class="fw-bolder mb-1"><?php echo $baslik; ?></h1>



                            <a class="badge bg-secondary text-decoration-none link-light"
                                href="favoriekle.php?id=<?php echo $blogid; ?>">FAVORİLER EKLE</a>

                        </header>
                        <figure class="mb-6"><img class="img-fluid rounded" src="images/icerikler/<?php echo $id;?>.png"
                                height="350" alt="..." /></figure>
                        <section class="mb-5">
                            <p class="fs-5 mb-4"><?php echo $icerik; ?></p>

                        </section>
                    </article>
                    <p class="clear"></p>
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