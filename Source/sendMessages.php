<?php

include 'includes/serverdb.php';
include 'includes/session.php';
    $id = strip_tags($_GET['idmessenger']);
    $idUser = strip_tags($_SESSION['idUser']);
    $text = str_replace("'","''", $_GET['text']);
    $time = date('Y-m-d H:i:s'); 
   $sqlsend = "INSERT INTO messages_es (sender, receiver, message, date0) VALUES ('$idUser', '$id', '$text', '$time')";
   $conn->query("set NAMES utf8");
   if ($conn->query($sqlsend) === TRUE) {
}

?>
