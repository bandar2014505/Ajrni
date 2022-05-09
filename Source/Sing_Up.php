<!DOCTYPE html>
<head >
    <!-- Main Meta Rulez -->
    <meta charset="UTF-8" />
    <title>Ajrni</title>
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/app.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap_arabic/bootstrapArabic.css" rel="stylesheet" type="text/css">


</head>
<?php
       include 'includes/session.php';
       $Divnote = $idNumber =   $fristName  =	$Email = 	$phoneNumber =	$password	= $permissions = "";

       if(strip_tags($_SERVER['REQUEST_METHOD']=="POST")){
        $idNumber = $_POST['idNumber'];
        $fristName = $_POST['fristName'];
        $Email = $_POST['Email'];
        $phoneNumber = $_POST['phoneNumber'];
        $password = $_POST['password'];
        $verifyPassword = $_POST['verifyPassword'];
        $permissions = $_POST['permissions'];
        
        if(isset($_POST['save'])){
            include 'includes/serverdb.php';
          if ($password == $verifyPassword) {
    
            $sql1 = "SELECT * FROM users  WHERE email='$Email'";
    $conn->query("set NAMES utf8");
    $result2 = $conn->query($sql1);
    if ($result2->num_rows > 0) {
    
      $Divnote = '<div class="alert alert-dismissible alert-danger">
      <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
      البريد الالكتروني مسجل مسبقا
    </div>';
    
    }
    else{
    
          $sql = "INSERT INTO users (idNumber,fristName, Email, phoneNumber, password, permissions) VALUES ('$idNumber','$fristName', '$Email', '$phoneNumber', '$password','$permissions')";
        $conn->query("set NAMES utf8");
        if ($conn->query($sql) === TRUE) {
            header("location: sign_in.php");

        }
        else {
          $Divnote = '<div class="alert alert-dismissible alert-danger">
          <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
          يوجد مشكلة في انشاء الحساب
        </div>';
      
      }
    }
    }
    else{
      $Divnote = '<div class="alert alert-dismissible alert-danger">
      <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
      يرجى تأكيد كلمة المرور
    </div>';
    
    }
    $conn->close();
        }
      }
    

   ?>


<body  style="background-color:#FFFFFF;">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/jquery.app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="coatainer1 me-auto">
      <!--Start Header-->
      <main>

      <?php include 'includes/session.php'; ?>
      <?php include 'includes/navbar.php'; ?>    

      <div class="container" >

<div class="row" style="margin-bottom: 60px">
    <div class="col-sm-12" style=" margin-top: 30px;">   
    <?php
     echo $Divnote;
     ?> 

</div>

<form  method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">

<div class="row">
<div class="col-sm-6 offset-3">
<div class="panel panel-success">
            <div class="panel-heading">تسجيل حساب جديد</div>
                <div class="panel-body">

<div class="col-sm-6">
                <div class="form-group">
                    <label for="permissions">نوع الحساب</label>
                    <select class="form-control" id="permissions" name="permissions">
                    <option value='1'>شركة</option>';
                    <option value='2'>زبون</option>';
                    </select>
                </div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                    <label for="fristName">الاسم كامل</label>
                    <input type="text" value="<?php echo $fristName;?>" class="form-control" name="fristName" required="">
                </div>
                </div>          

                <div class="col-sm-6">
                <div class="form-group">
                    <label for="idNumber" id="idNumber1">السجل التجاري</label>
                    <input type="text" value="<?php echo $idNumber;?>" class="form-control" name="idNumber" required="" minlength="10">
                </div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                    <label for="phoneNumber">رقم الجوال</label>
                    <input type="text" value="<?php echo $phoneNumber;?>" class="form-control" name="phoneNumber" required="">
                </div>
                </div>

                <div class="col-sm-12">
                <div class="form-group">
                    <label for="Email">البريد الالكتروني</label>
                    <input type="email" value="<?php echo $Email;?>" class="form-control" name="Email" required="">
                </div>
                </div>




                <div class="col-sm-6">
                <div class="form-group">
                    <label for="password">كلمة المرور</label>
                    <input type="password" value="<?php echo $password;?>" class="form-control" name="password" minlength="8"  required="">
                </div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                    <label for="verifyPassword">تأكيد كلمة المرور</label>
                    <input type="password" value="" class="form-control" name="verifyPassword" minlength="8"  required="">
                </div>
                </div>

                
                <div class="col-sm-12">
                <div class="form-group">
                    <button type="submit" name="save" class="btn btn-danger pull-left">
                    <svg width="16" height="16" fill="currentColor" class="bi bi-save2" viewBox="0 0 16 16">
                        <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                    </svg>
تسجيل الحساب</button>
             
             
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

      <script>
        $(document).on('click', '#permissions', function() {
            if ($('#permissions').val() == 2) {
                $('#idNumber1').html('رقم الهوية');
            }
            else{
                $('#idNumber1').html('السجل التجاري');

            }
        });
        


  

  
        </script>
   </body>


</html>