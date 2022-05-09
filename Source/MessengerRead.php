<?php

include 'includes/serverdb.php';
include 'includes/session.php';
   $messenger = ""; 
    $id = $_GET['idmessenger'];
    $idUser = $_SESSION['idUser'];
    $time = date('Y-m-d H:i:s'); 

    $sql = "UPDATE messages_es SET status = 1 , dateRead='$time' WHERE sender='$id' and receiver='$idUser' and status=0";

   
$conn->query("set NAMES utf8");
if ($conn->query($sql) === TRUE) {
}

?>
