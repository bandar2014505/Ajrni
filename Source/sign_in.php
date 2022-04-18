<!DOCTYPE html>

<head>
    <!-- Main Meta Rulez -->
    <meta charset="UTF-8" />
    <title>Ajrni</title>
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/app.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap_arabic/bootstrapArabic.css" rel="stylesheet" type="text/css">


</head>
<?php
       include 'includes/session.php';
      $_SESSION['idheader'] = "sign_in";

     $Divnote = "" ;
     $Email =	$password	= "";

   if(strip_tags($_SERVER['REQUEST_METHOD']=="POST")){
    $Email = $_POST['email'];
    $password = $_POST['password'];

    if(isset($_POST['save'])){
        include 'includes/serverdb.php';

        $sql1 = "SELECT * FROM users  WHERE email='$Email' and password='$password'";
$conn->query("set NAMES utf8");
$result2 = $conn->query($sql1);
if ($result2->num_rows > 0) {
  while ($row = $result2->fetch_assoc()) {
  session_start();
                  $_SESSION['idUser'] = $row['id'];
                $_SESSION['nameUser'] = $row['fristName'];
                $_SESSION['emailUser'] = $row['email'];
                $_SESSION['passUser'] = $row['password'];
                $_SESSION['Permissions'] = $row['permissions'];  
                       
                session_write_close();
                header("location: index.php");
  }
}
else{
  $Divnote = '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
  خطأ في اسم المستخدم أو كلمة المرور
</div>';

}

$conn->close();
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

            <?php include 'includes/session.php'; ?>
            <?php include 'includes/navbar.php'; ?>

            <div class="container">

                <div class="row" style="margin-bottom: 60px">
                    <div class="col-sm-12" style=" margin-top: 30px;">
                        <?php
     echo $Divnote;
     ?>

                    </div>

                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">

                        <div class="row">
                            <div class="col-sm-4 offset-4">
                                <div class="panel panel-success">
                                    <div class="panel-heading">تسجيل الدخول</div>
                                    <div class="panel-body">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="email">اسم المستخدم</label>
                                                <input type="email" value="" class="form-control" name="email"
                                                    required="">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="nameServices">كلمة المرور</label>
                                                <input type="password" value="" class="form-control" name="password"
                                                    minlength="8" required="">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <a href="Sing_Up.php">ليس لديك حساب؟ سجل الآن</a>
                                                <button type="submit" name="save" class="btn btn-danger pull-left">
                                                    <svg width="16" height="16" fill="currentColor" class="bi bi-save2"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                                                    </svg>
                                                    تسجيل دخول</button>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>




                </div>

            </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    </main>


</body>

</html>
