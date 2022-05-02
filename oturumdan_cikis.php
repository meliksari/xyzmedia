<?php
session_start();

session_unset();
session_destroy();
echo "<center>Oturum başarıyla sonlandırıldı</center>";
header( "refresh:0;url=index.php" );

?>

