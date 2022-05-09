<?php

include 'includes/serverdb.php';
include 'includes/session.php';

   $messenger = ""; 
    $id1 = $_GET['idmessenger'];
    $id2 = $_SESSION['idUser'];

   $notifications = "";

    $sql = "SELECT * FROM view_messages2_es where (sender='$id1' and receiver='$id2') or (sender='$id2' and receiver='$id1') ORDER BY id DESC";

$conn->query("set NAMES utf8");
$result1 = $conn->query($sql);
$i = 1;

    while($row = $result1->fetch_assoc()) {

        if ($row['sender'] == $id2) {

            $notifications = $notifications .'<tr class="table-default"><td><span class="badge bg-warning">';
            $notifications = $notifications .   $row['nameSender']; 
            $notifications = $notifications .' </span><span class="badge bg-secondary">';
          $notifications = $notifications .  $row['date0']; 
          $notifications = $notifications .' </span><br>';
          $notifications = $notifications .  $row['message']; 

          $notifications = $notifications .'<br><span class="badge bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
          </svg>';
          $notifications = $notifications .  $row['dateRead']; 
          $notifications = $notifications .'</span>';
          $notifications = $notifications .' </td></tr>';
              }
              else{

                $notifications = $notifications .'<tr class="table-default"><td><span class="badge bg-danger">';
                $notifications = $notifications .   $row['nameSender']; 
                $notifications = $notifications .' </span><span class="badge bg-info">';
              $notifications = $notifications .  $row['date0']; 
              $notifications = $notifications .' </span><br>';
              $notifications = $notifications .  $row['message']; 
              $notifications = $notifications .'<br><span class="badge bg-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
              </svg>';
              $notifications = $notifications .  $row['dateRead']; 
              $notifications = $notifications .'</span>';
              $notifications = $notifications .' </td></tr>';
              }




 
$i ++;

    }




$count = $i - 1;
$conn->close();   
$data = array(
   'unseen_notification'   => $count,
   'unseen_notification1'  => $notifications,

);


echo json_encode($data);

?>
