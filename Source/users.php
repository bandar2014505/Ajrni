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

     $Divnote = "" ;
     if(strip_tags($_SERVER['REQUEST_METHOD']=="POST")){
      include 'includes/serverdb.php';

      if(isset($_POST['b1'])){
        $id = $_POST['id'];
        $sql1 = "";
             $sql1 = "UPDATE users SET password='123456789' WHERE id='$id'";
            $conn->query("set NAMES utf8");
            if ($conn->query($sql1) === TRUE) {
              $Divnote = '<div class="alert alert-dismissible alert-success">
        <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
        كلمة المرور الجديدة:  123456789
      </div>';
          }
          else {
            $Divnote = '<div class="alert alert-dismissible alert-danger">
            <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
            يوجد مشكلة في التعديل
          </div>';
        
        }
                       
       } 

       
       if(isset($_POST['b2'])){
        $id = $_POST['id'];

        $sql = "DELETE  FROM users WHERE id='$id'";
        $conn->query("set NAMES utf8");
        if ($conn->query($sql) === TRUE) {
          $Divnote = '<div class="alert alert-dismissible alert-success">
          <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
         تم الحذف بنجاح.
        </div>';        } 
        else {
          $Divnote = '<div class="alert alert-dismissible alert-danger">
          <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
          يوجد مشكلة في الحذف
        </div>';
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
                        <input type="hidden" name="id" id="id" value="" />
                        <div class="row ">
                            <div class="col-sm-12">
                                <div class="panel panel-success">

                                    <div class="panel-heading" style="height:60px">
                                        <div class="row">
                                            <div class="col-sm-9">

                                                المستخدمين
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control" id="myInput" type="text" placeholder="بحث"
                                                    onkeyup="myFunction1()">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-body">

                                        <table class="table table-hover" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">اسم المستخدم</th>
                                                    <th scope="col">الايميل</th>
                                                    <th scope="col">الصلاحيات</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php 
                             include 'includes/serverdb.php';

  $sql1 = "SELECT * FROM users";
$conn->query("set NAMES utf8");
     $result2 = $conn->query($sql1);
     $i = 1;
     if ($result2->num_rows > 0) {
      while ($row = $result2->fetch_assoc()) {
        echo '<tr>';
        echo '<td hidden>';
        echo $row["id"];
        echo '</td>';
         
        echo '<td>';
        echo $i;
        echo '</td>';

        echo '<td>';
        echo $row["fristName"];
        echo '</td>';

        echo '<td>';
        echo $row["Email"];
        echo '</td>';

        echo '<td>';
        if ($row["permissions"] == 1) {
          echo 'شركة';
        }
        elseif ($row["permissions"] == 2) {
          echo 'زبون';
        }
        elseif ($row["permissions"] == 3) {
          echo 'مدير النظام';
        }
        echo '</td>';


        echo '<td>';
        echo '<button  class="btn btn-link"  type="button" data-toggle="modal" data-target="#Modald1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
      </svg>  تغير كلمة المرور

        </button> 
        <button  class="btn btn-link" type="button" data-toggle="modal" data-target="#Modaldelete">
        <svg width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
      </svg>
        حذف
        </button>';
        echo '</td>';

        echo '</tr>';
        $i++;
          }
         
     }
 ?>


                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div>


                </div>
            </div>
    </div>

    <div id="Modaldelete" class="modal" role="dialog">

        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">تأكيد عملية الحذف</h4>

                    <button type="button" class="close pull-left" style="margin-left:8px;"
                        data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        <h4>هل أنت متأكد من عملية الحذف</h4>
                </div>

                <div class="modal-footer">
                    <button name="b2" id="b2"  class="btn btn-success pull-left">تأكيد</button>
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>

                </div>
            </div>
        </div>
    </div>

    
    <div id="Modald1" class="modal" role="dialog">

        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">تأكيد تغيير كلمة المرور</h4>

                    <button type="button" class="close pull-left" style="margin-left:8px;"
                        data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        <h4>هل أنت متأكد من تغيير كلمة المرور</h4>
                </div>
                <div class="modal-footer">
                    <button name="b1"  id="b1"  class="btn btn-success pull-left">تأكيد</button>
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                </div>
            </div>
        </div>
    </div>

    </form>

    <?php include 'includes/footer.php'; ?>
    </main>
    <script>
    var tbl = document.getElementById("myTable")
    for (var x = 1; x < tbl.rows.length; x++) {
        tbl.rows[x].onclick = function() {
            document.getElementById("id").value = this.cells[0].innerHTML;
        }

    }


    function myFunction1() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 1; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    </script>

</body>

</html>