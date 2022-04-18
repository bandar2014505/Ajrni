<!DOCTYPE html>

<head>
    <!-- Main Meta Rulez -->
    <meta charset="UTF-8" />
    <title>Ajrni</title>
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/app.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap_arabic/bootstrapArabic.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/CarReservation.css">


</head>
<?php
 include 'includes/session.php';

     $Divnote = $d  =  "" ;
     if(strip_tags($_SERVER['REQUEST_METHOD']=="POST")){
        if (!empty($_POST['d'])) {
            $d = $_POST['d'];
        }

        include 'includes/serverdb.php';
  
        if(isset($_POST['save2'])){
            if (isset($_SESSION['idUser'])) {

          $idCars = $_POST['id'];
          $dateFrom = $_POST['dateFrom1']  . " " .  $_POST['dateFrom2'];
          $dateTo = $_POST['dateTo1']  . " " .  $_POST['dateTo2'];
          $note = $_POST['note'];
          
          $date0 =  date('Y-m-d'); 
          $userId = $_SESSION['idUser'];

  if ($dateTo > $dateFrom ) {
          $sql1 = "INSERT INTO reservations (dateFrom,dateTo,note,date0,idCars,userId) VALUES ('$dateFrom','$dateTo','$note','$date0','$idCars','$userId')";
              $conn->query("set NAMES utf8");
              if ($conn->query($sql1) === TRUE) {

                $sql = "UPDATE cars SET Status=1 where id='$idCars'";
                $conn->query("set NAMES utf8");
                if ($conn->query($sql) === TRUE) {
                }

                $Divnote = '<div class="alert alert-dismissible alert-success">
          <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
  تم الحجز بنجاح
        </div>';
            }
            else {
              $Divnote = '<div class="alert alert-dismissible alert-danger">
              <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
              يوجد مشكلة في الحجز
            </div>';
          
          }
                         
         } 

         else {
            $Divnote = '<div class="alert alert-dismissible alert-danger">
            <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
            خطأ، تأكد من بيانات الحجز
          </div>';
        
        }


        }
else{
    header("location: sign_in.php");

}
  
  
       }
  
    }

   ?>


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

            <?php include 'includes/navbar.php'; ?>

            <div class="container">

                <div class="row" style="margin-bottom: 60px">
                    <div class="col-sm-12" style=" margin-top: 30px;">
                        <?php
     echo $Divnote;
     ?>

                    </div>
                    <div class="container_product">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" id="form">

                    <div class="col-sm-2">
                    <legend style="font-size:16px; margin-top:30px;">الأقسام</legend>

                    <div class="form-check" >
        <input class="form-check-input d" type="checkbox" value="" id="d0" name="d" >
        <label class="form-check-label d" for="d0" style="padding-right: 20px;">
         الكل
        </label>
      </div>

                    <?php 
                             include 'includes/serverdb.php';

  $sql1 = "SELECT type FROM cars GROUP BY type ";
$conn->query("set NAMES utf8");
     $result2 = $conn->query($sql1);
     $i = 1;
     if ($result2->num_rows > 0) {
      while ($row = $result2->fetch_assoc()) {
        echo '<div class="form-check" >
        <input class="form-check-input d" type="checkbox" value="'. $row["type"] . '" id="d' . $i . '" name="d"';
        echo '>
        <label class="form-check-label d" for="d' . $i . '" style="padding-right: 20px;">
          ' . $row["type"] . '
        </label>
      </div>';
      $i++;

      }}
      ?>

                    </div>
    </form>

                    <div class="col-sm-10">


                        <?php 
                             include 'includes/serverdb.php';

  $sql1 = "SELECT * FROM cars ";

  $sql1 = $sql1 . " where Status=0";  
  if ($d) {
    $sql1 = $sql1 . " and type='$d'";  
}

$conn->query("set NAMES utf8");
     $result2 = $conn->query($sql1);
     $i = 1;
     if ($result2->num_rows > 0) {
      while ($row = $result2->fetch_assoc()) {
echo '
<div class="col-sm-4">
<div class="card_image">
    <section class="card">
        <div class="image"><img src="imgcar/' . $row["file"] . '.jpg' . '"
                alt="" /></div>
        <div class="inner">
            <center>
                <header style="margin: 20px">
                    <h2>' . $row["type"] . " ، موديل:   " . $row["model"] . '</h2>
                    <p>' . $row["color"]  . '</p>
                </header>
                <p>' .  $row["price"]   . " ريال لكل ساعة ". '</p>
            </center>
            <button type="button" class="btn btn-warning send"';
            echo 'data-id="' . $row["id"] . '"';
            echo ' data-toggle="modal" data-target="#Modald1" id="save" name="save">احجز الآن</button>
        </div>
    </section>
    </div>
    </div>
';




      }}
      ?>


</div>





                    </div>

                </div>
            </div>
    </div>




    <div id="Modald1" class="modal" role="dialog">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">تأكيد الحجز</h4>

                    <button type="button" class="close pull-left" style="margin-left:8px;"
                        data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">

                        <input type="hidden" name="id" id="id" value="" />

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">تاريخ الحجز</label>
                                    <input class="form-control" type="date" name="dateFrom1" id="dateFrom1">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">الساعة</label>
                                    <input class="form-control" type="time" name="dateFrom2" id="dateFrom2">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">تاريخ الانتهاء</label>
                                    <input class="form-control" type="date" name="dateTo1" id="dateTo1">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">الساعة</label>
                                    <input class="form-control" type="time" name="dateTo2" id="dateTo2">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">ملاحظات</label>
                                    <textarea class="form-control" id="note" name="note" rows="2"></textarea>
                                </div>
                            </div>
                        </div>



                </div>

                <div class="modal-footer">
                    <button name="save2" id="save2" class="btn btn-success pull-left">تأكيد</button>
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>

                </div>


            </div>
        </div>
    </div>
                </form>


    <?php include 'includes/footer.php'; ?>
    </main>
    <script>
    $(document).on('click', '#save', function() {
        $('#id').val($(this).data('id'));
    });
    $(document).on('click', '.d', function() {
        document.getElementById("form").submit();

    });

    </script>

</body>

</html>