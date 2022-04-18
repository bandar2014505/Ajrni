///
<?php
 $nameUser = $idUser = "";
 session_start();
  if (isset($_SESSION['idUser'])) {
   $idUser = $_SESSION['idUser'];
   $nameUser = $_SESSION['nameUser'];
   $passUser = $_SESSION['passUser'];
   $emailUser = $_SESSION['emailUser'];
   $Permissions = $_SESSION['Permissions'];
session_write_close();
if ($Permissions <= 0) { 
    header("location: logof.php");
} 
}
session_write_close();
?>
