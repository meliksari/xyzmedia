<!DOCTYPE html>
<html lang="tr">

<head>
    <title>XYZ Media - Giriş Ekranı</title>
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

<body class="text-center" style="background-color:grey;">

<form class="form-signin" method="POST" action="giris.php" >

    <img class="mb-4" src="images/logo.png" alt="" width="150" height="150">
    <h1 class="h3 mb-3 font-weight-normal">Lütfen Giriş Yapınız</h1>
    <label for="inputEmail" class="sr-only">Mail Adresi</label>
    <input type="email" id="inputEmail" name="mail" class="form-control" placeholder="Mail Adresi @" required autofocus>
    <label for="inputPassword" class="sr-only">Şifre</label>
    <input type="password" id="inputPassword" name="sifre" class="form-control" placeholder="Şifre" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Beni Hatırla
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş Yap</button>
    <p class="mt-5 mb-3 text-info">&copy; Xyz Media @2021</p>
</form>
</body>
</html>
