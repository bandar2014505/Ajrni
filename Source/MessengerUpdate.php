<?php

include 'includes/serverdb.php';
include 'includes/session.php';
    $idUser = $_SESSION['idUser'];
    $time = date('Y-m-d H:i:s'); 
    $count0 = 0;
    $notifications = 0;

    

    $sql0 = "SELECT count(id) as count0 FROM messages_es WHERE receiver='$idUser' and status=0";
    $conn->query("set NAMES utf8");
    $result0 = $conn->query($sql0);
    $i = 1;
     while ($row1 = $result0->fetch_assoc()) {
      if ($row1["count0"] > 0) {
   $count0 = $row1["count0"];
                }
     }


     $sql1 = "SELECT count(id) as count0 FROM notifications_es WHERE receiver='$idUser' and status=0";
     $conn->query("set NAMES utf8");
     $result1 = $conn->query($sql1);
     $i = 1;
      while ($row1 = $result1->fetch_assoc()) {
       if ($row1["count0"] > 0) {
    $notifications = $row1["count0"];
                 }
      }


     $conn->close();   

     $data = array(
        'unseen_count'   => $count0,
        'unseen_notifications'  => $notifications,
     
     );
     
     
     echo json_encode($data);

?>
