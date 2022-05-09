<!DOCTYPE html>

<head>
    <!-- Main Meta Rulez -->
    <meta charset="UTF-8" />
    <title>Ajrni</title>
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/app.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap_arabic/bootstrapArabic.css" rel="stylesheet" type="text/css">
    <script class="u-script" type="text/javascript" src="js/messenger1.js" defer=""></script>

  
  <style>
    .img1 {
        height: 80px;
    }

    .card1 {
        margin-top: 30px;
    }

    .list-group-flush:hover li {
        background-color: rgba(245, 245, 245, 0.938);
    }

    .card1:hover{
        cursor: pointer;
    transform: scale(1.02);
    background-color: rgb(233, 233, 233);    }

    
    </style>

</head>

<body style="background-color:#FFFFFF;">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="js/jquery.app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="coatainer1 me-auto">
        <!--Start Header-->
        <main>

            <?php 
      include 'includes/session.php'; 
      include 'includes/navbar.php';
    ?>


 <div class="container">
      
      <legend>الاشعارات</legend>
      <input type="hidden" name="idmessenger" id="idmessenger" value="0"/>
        <div class="row ">
    <div class="col-sm-8">
                <div class="panel panel-danger">
                    <div class="panel-body">
                        <table class="table table-hover">

                            <tbody> 
 
                            
                            <?php 
                             include 'includes/serverdb.php';
$idUser= $_SESSION['idUser'];
  $sql1 = "SELECT * FROM notifications_es where receiver='$idUser' ORDER BY id DESC";
$conn->query("set NAMES utf8");
     $result2 = $conn->query($sql1);
     if ($result2->num_rows > 0) {
      while ($row = $result2->fetch_assoc()) {
          echo '<tr>';
        echo '<td  style="font-size:16px;color:black">';
        echo $row["message"];
        echo '<br>';
        echo '<span class="badge bg-warning">' . $row["date0"] . '</span>';

        echo '</td>';    
        echo '</tr>';
          }
         
     }

     $time = date('Y-m-d H:i:s'); 
     $sql = "UPDATE notifications_es SET status = 1  WHERE  receiver='$idUser' and status=0";
 $conn->query("set NAMES utf8");
 if ($conn->query($sql) === TRUE) {
 }

 

 ?>


     </tbody>
    </table>
    
        </div>
    
    
    
    </div>
    
    </div>
    
        </div>
            </div>

            <?php include 'includes/footer.php'; ?>
        </main>


</body>

</html>