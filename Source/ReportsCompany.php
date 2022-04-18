<!DOCTYPE html>

<head>
    <!-- Main Meta Rulez  -->
    <meta charset="UTF-8" />
    <title>Ajrni</title>
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/app.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap_arabic/bootstrapArabic.css" rel="stylesheet" type="text/css">


</head>
<?php

     $Divnote = $userId = $dateFrom =  $dateTo  = $Table =   $sql1 = "" ;
     $Status = 4;
    $sum = 0;
     include 'includes/serverdb.php';
     if(strip_tags($_SERVER['REQUEST_METHOD']=="POST")){
        $userId = $_POST['userId'];
        $dateFrom = $_POST['dateFrom'];
        $dateTo = $_POST['dateTo'];
        $Status = $_POST['Status'];

     $sql1 = "SELECT reservations.*, cars.type , cars.model, cars.color, cars.price, users.fristName, 
               ((TO_SECONDS(reservations.dateTo) - TO_SECONDS(reservations.dateFrom))/3600) as hourAll, 
              ((TO_SECONDS(reservations.dateTo) - TO_SECONDS(reservations.dateFrom))/3600)* cars.price as priceAll
               FROM reservations left JOIN cars on (reservations.idCars = cars.id) left JOIN users on (reservations.userId = users.id) where reservations.date0 BETWEEN '$dateFrom' AND '$dateTo'";
    
    if ($Status < 4) {
        $sql1 =  $sql1 . "and reservations.Status='$Status'";
    }

    if ($userId > 0) {
        $sql1 =  $sql1 . "and reservations.userId='$userId'";
    }
    $i = 1;

    $conn->query("set NAMES utf8");
    $result2 = $conn->query($sql1);
    if ($result2->num_rows > 0) {
     while ($row = $result2->fetch_assoc()) {
        $sum+= $row["priceAll"];


        $Table = $Table .  '<tr>';
        $Table = $Table .  '<td hidden>';
        $Table = $Table .  $row["id"];
        $Table = $Table .  '</td>';
     
        $Table = $Table .  '<td hidden>';
        $Table = $Table .  $row["idCars"];
        $Table = $Table .  '</td>';

        $Table = $Table .  '<td>';
        $Table = $Table .  $i;
        $Table = $Table .  '</td>';

        $Table = $Table .  '<td>';
        $Table = $Table .  $row["type"] . " " . $row["model"]  . " " . $row["color"];
        $Table = $Table .  '</td>';

        $Table = $Table .  '<td>';
        $Table = $Table .  $row["price"] . " ريال/ساعة";
        $Table = $Table .  '</td>';

        $Table = $Table .  '<td>';
        $Table = $Table .  $row["fristName"];
        $Table = $Table .  '</td>';

        $Table = $Table .  '<td>';
        $Table = $Table .  date('d-m-Y', strtotime($row["dateFrom"]));
        $Table = $Table .  '</td>';

        $Table = $Table .  '<td>';
        $Table = $Table .   date('H:i:s', strtotime($row["dateFrom"]));
        $Table = $Table .  '</td>';

        $Table = $Table .  '<td>';
        $Table = $Table .  date('d-m-Y', strtotime($row["dateTo"]));
        $Table = $Table .  '</td>'; 

        $Table = $Table .  '<td>';
        $Table = $Table .   date('H:i:s', strtotime($row["dateTo"]));
        $Table = $Table .  '</td>'; 

        $Table = $Table .  '<td>';
        $Table = $Table .  round($row["hourAll"], 2);
        $Table = $Table .  '</td>'; 

        $Table = $Table .  '<td>';
        $Table = $Table .  round($row["priceAll"], 2);
        $Table = $Table .  '</td>'; 

        

        $Table = $Table .  '<td>';
        if ($row["Status"] == 0) {
            $Table = $Table .  ' <span class="badge bg-info">تم الطلب</span>';
          }
          elseif ($row["Status"] == 1) {
            $Table = $Table .  ' <span class="badge bg-success">الطلب مقبول</span>';
          }
          elseif ($row["Status"] == 2) {
            $Table = $Table .  ' <span class="badge bg-primary">الطلب مكتمل</span>';
          }
          elseif ($row["Status"] == 3) {
            $Table = $Table .  ' <span class="badge bg-danger">ملغي</span>';
            }

            $Table = $Table .  '</td>';

            $Table = $Table .  '<td>';

 


        



            $Table = $Table .  '</tr>';
        $i++;



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
                            <legend>تقرير الطلبات</legend>
                        </div>
                    </div>

                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">

                        <div class="row">

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">من تاريخ</label>
                                    <input class="form-control" type="date" id="dateFrom" name="dateFrom" value="<?php echo $dateFrom; ?>">
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">الى تاريخ</label>
                                    <input class="form-control" type="date" id="dateTo" name="dateTo" value="<?php echo $dateTo; ?>">
                                </div>
                            </div>


                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">الزبون</label>
                                    <select class="form-control" id="userId" name="userId">
                                        <option value="0">الكل</option>
                                        <?php
                                                include 'includes/serverdb.php';

            $sql = "SELECT id, fristName FROM users where permissions=2  ORDER BY fristName ASC ";
            $conn->query("set NAMES utf8");
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  $idd = $row["id"];
                  echo "<option value='$idd'";
                  if($userId=="$idd") echo 'selected="selected"';
                    echo '>';
                    echo $row["fristName"];
                    echo '</option>';
                }}

            ?>
                                    </select>


                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">حالة الطلب</label>
                                    <select class="form-control" id="Status" name="Status">
                                        <option value='4' <?php if($Status==4) echo 'selected="selected"';?>>الكل</option>
                                        <option value='0'  <?php if($Status==0) echo 'selected="selected"';?>>تم الطلب</option>
                                        <option value='1'  <?php if($Status==1) echo 'selected="selected"';?>>الطلب مقبول</option>
                                        <option value='2'  <?php if($Status==2) echo 'selected="selected"';?>>الطلب مكتمل</option>
                                        <option value='3'  <?php if($Status==3) echo 'selected="selected"';?>>الطلب ملغي</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <button type="submit" name="save" class="btn btn-danger" style="margin-top:25px;">
                                        <svg width="16" height="16" fill="currentColor" class="bi bi-save2"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                                        </svg>
                                        بحث</button>
                                </div>
                            </div>


                        </div>
                    </form>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-success">
                                <div class="panel-heading" style="height:60px">
                                    <div class="row">
                                        <div class="col-sm-9">
                                        تفاصيل الطلبات
                                       - الإجمالي  ( <?php echo round($sum, 2); ?> ) ريال
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
                                                <th scope="col">معلومات السيارة</th>
                                                <th scope="col">السعر/ ساعة</th>
                                                <th scope="col">الزبون</th>
                                                <th scope="col">تاريخ الحجز</th>
                                                <th scope="col">وقت البدء</th>
                                                <th scope="col">تاريخ التسليم</th>
                                                <th scope="col">وقت التسليم</th>
                                                <th scope="col">عدد الساعات</th>
                                                <th scope="col">السعر الاجمالي</th>
                                                <th scope="col">الحالة</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            echo $Table;
                                            ?>


                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>




            <?php include 'includes/footer.php'; ?>
        </main>
        <script>
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
