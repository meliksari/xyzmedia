<?php 

$navbar="";

if(!isset($_SESSION["login"])){

    echo  "
    <nav class='navbar navbar-expand-md navbar-dark bg-dark'>
    <div class='navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2'>
    </div>
    <div class='mx-auto order-0'>
    <a href='anasayfa.php'>  <img class='mb-2' src='images/logo.png' alt='' width='72' height='72'> </a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='.dual-collapse2'>
            <span class='navbar-toggler-icon'></span>
        </button>
    </div>
    <div class='navbar-collapse collapse w-100 order-3 dual-collapse2'>
        <ul class='navbar-nav ml-auto'>
            <li class='nav-item'>
            <a href='index.php' class='btn btn-warning btn-lg active' role='button' aria-pressed='true'>GİRİŞ YAP</a>
            </li>
        </ul>
    </div>
</nav>
";
 

     
}
else {

  echo  "
  <nav class='navbar navbar-expand-md navbar-dark bg-dark'>
     <div class='navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2'>
     </div>
     <div class='mx-auto order-0'>
     <a href='anasayfa.php'>  <img class='mb-2' src='images/logo.png' alt='' width='72' height='72'> </a>
         <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='.dual-collapse2'>
             <span class='navbar-toggler-icon'></span>
         </button>
     </div>
     <div class='navbar-collapse collapse w-100 order-3 dual-collapse2'>
         <ul class='navbar-nav ml-auto'>
         <li class='nav-item'>
             <a href='favoriler.php' class='btn btn-secondary btn-lg active mr-2' role='button' aria-pressed='true'>FAVORİLER</a>
             </li>
             <li class='nav-item'>
             <a href='english.php' class='btn btn-secondary btn-lg active  mr-2' role='button' aria-pressed='true'>ENGLİSH</a>
             </li>
             <li class='nav-item'>
             <a href='oturumdan_cikis.php' class='btn btn-warning btn-lg active' role='button' aria-pressed='true'>ÇIKIŞ</a>
             </li>
         </ul>
     </div>
 </nav>

 ";
}




?>
