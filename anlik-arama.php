<?php
include "baglan.php";
$dbname = "aramadb";
$arama="";
$baslik="";
 
  if (isset($_POST['query'])) {
      $query = "SELECT * FROM yazi WHERE baslik LIKE '{$_POST['query']}%' LIMIT 100";
      $result = mysqli_query($baglan, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_array($result)) {

      echo $baslik = $res['baslik']."
			<a href='detay.php?blogid=".$res['id']."' class='text-white font-weight-bold'>
			<div class='col-md-8 order-md-1' style='background-color:white'>
            <img class='featurette-image img-fluid mx auto' src='images/icerikler/".$res['id'].".png' height='100' width='100' alt='RESİM'>
          </div>
		  </a> 
      </br>
			
			";



      }
    } else {
      echo "
      <div class='alert alert-danger mt-3 text-center' role='alert'>
          İÇERİK BULUNAMADI.
      </div>
      ";
    }
  }
?>


  