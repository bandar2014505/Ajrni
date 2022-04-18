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

      include 'includes/session.php';
      include 'includes/serverdb.php';

      if(isset($_POST['save'])){
        $dt = '';
        $idCars = $_POST['idCars'];
        $type = $_POST['type'];
        $model = $_POST['model'];
        $color = $_POST['color'];
        $price = $_POST['price'];
        
        $date0 =  date('Y-m-d H:i:s'); 
        $idCompany = $_SESSION['idUser'];

         if(isset($_FILES['file1'])){
            $file_name = $_FILES['file1']['name'];
            $file_size = $_FILES['file1']['size'];
            $file_tmp = $_FILES['file1']['tmp_name'];
            $file_type = $_FILES['file1']['type'];   
              $dt = time();
                if(move_uploaded_file($file_tmp,"imgcar/". $dt . ".jpg")) {
            }

        }
        $sql1 = "INSERT INTO cars (idCars,type, model, color,price, file, date0, idCompany) VALUES ('$idCars','$type', '$model', '$color', '$price', '$dt', '$date0','$idCompany')";
            $conn->query("set NAMES utf8");
            if ($conn->query($sql1) === TRUE) {
              $Divnote = '<div class="alert alert-dismissible alert-success">
        <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
تم الحفظ بنجاح
      </div>';
          }
          else {
            $Divnote = '<div class="alert alert-dismissible alert-danger">
            <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
            يوجد مشكلة في الحفظ
          </div>';
        
        }
                       
       } 

       if(isset($_POST['edit'])){
        $dt = '';
        $id = $_POST['id2'];
        $idCars = $_POST['idCars2'];
        $type = $_POST['type2'];
        $model = $_POST['model2'];
        $color = $_POST['color2'];
        $price = $_POST['price2'];
        $date0 =  date('Y-m-d H:i:s'); 
        $idCompany = $_SESSION['idUser'];

         if(isset($_FILES['file2'])){
            $errors= array();
            $file_name = $_FILES['file2']['name'];
            $file_size = $_FILES['file2']['size'];
            $file_tmp = $_FILES['file2']['tmp_name'];
            $file_type = $_FILES['file2']['type'];   
            $extension=explode('.',$file_name); 
            $file_ext=strtolower(end($extension));
            $expensions= array("jpg");         
            if(in_array($file_ext,$expensions) === false){
                $errors[]=$Divnote;
            }
            if(empty($errors)){
              $dt = time();
                if(move_uploaded_file($file_tmp,"imgcar/". $dt . ".jpg")) {
                }
  
              }
            }

            $sql1 = "UPDATE cars SET idCars='$idCars', type='$type', model='$model', color='$color', price='$price', file='$dt' WHERE id='$id'";
            $conn->query("set NAMES utf8");
            if ($conn->query($sql1) === TRUE) {
              $Divnote = '<div class="alert alert-dismissible alert-success">
        <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
تم التعديل بنجاح
      </div>';
          }
          else {
            $Divnote = '<div class="alert alert-dismissible alert-danger">
            <button type="button" class="close  pull-left" data-dismiss="alert">&times;</button>
            يوجد مشكلة في التعديل
          </div>';
        
        }
                       
       } 
       
       if(isset($_POST['delete'])){
        $id = $_POST['id'];

        $sql = "DELETE  FROM cars WHERE id='$id'";
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

                    <div class="row">
                        <div class="col-sm-12">
                            <legend>السيارات
                                <button type="button" class="btn btn-danger  pull-left" id="Modal0" data-toggle="modal"
                                    data-target="#myModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                    اضافة سيارة جديدة</button>
                            </legend>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-success">

                                <div class="panel-heading" style="height:60px">
                                    <div class="row">
                                        <div class="col-sm-9">

                                            السيارات
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
                                                <th scope="col">اسم السيارة</th>
                                                <th scope="col">النوع</th>
                                                <th scope="col">الموديل</th>
                                                <th scope="col">اللون</th>
                                                <th scope="col">السعر/ ساعة</th>
                                                <th scope="col">الحالة</th>
                                                <th scope="col">الاجراء</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                             include 'includes/serverdb.php';

  $sql1 = "SELECT * FROM cars where idCompany='$idUser'";
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
        echo $row["idCars"];
        echo '</td>';

        echo '<td>';
        echo $row["type"];
        echo '</td>';

        echo '<td>';
        echo $row["model"];
        echo '</td>';

        echo '<td>';
        echo $row["color"];
        echo '</td>';    

        echo '<td>';
        echo $row["price"] . " ريال/ساعة";
        echo '</td>'; 

        echo '<td>';
        if ($row["Status"] == 0) {
          echo '<span class="badge bg-primary">متاحة</span>';
        }
        elseif ($row["Status"] == 1) {
          echo '<span class="badge bg-danger">محجوزة</span>';
        }
        echo '</td>';

        echo '<td>';
        echo '<button type="button" class="btn btn-link" id="ModalEdit"';
        echo 'data-id="' . $row["id"] . '"';
        echo 'data-idcars="' . $row["idCars"] . '"';
        echo 'data-type="' . $row["type"] . '"';
        echo 'data-model="' . $row["model"] . '"';
        echo 'data-color="' . $row["color"] . '"';
        echo 'data-price="' . $row["price"] . '"';

        echo 'data-toggle="modal" data-target="#myModal2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
        تعديل</button>

        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#Modaldelete">
        <svg width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
      </svg>
        حذف</button>       
        ';





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
            <?php include 'includes/addCar.php'; ?>

            <?php include 'includes/footer.php'; ?>
        </main>
        <script>
        $(document).on('click', '#ModalEdit', function() {
            $('#id2').val($(this).data('id'));
            $('#idCars2').val($(this).data('idcars'));
            $('#type2').val($(this).data('type'));
            $('#model2').val($(this).data('model'));
            $('#color2').val($(this).data('color'));
            $('#price2').val($(this).data('price'));
        });


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