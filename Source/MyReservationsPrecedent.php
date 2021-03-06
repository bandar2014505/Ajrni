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
                            <legend>الحجوزات السابقة</legend>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-success">

                                <div class="panel-heading" style="height:60px">
                                    <div class="row">
                                        <div class="col-sm-9">

                                            الحجوزات
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
                             include 'includes/serverdb.php';

 $sql1 = "SELECT reservations.*, cars.type , cars.model, cars.name0, cars.color, cars.price, 
((TO_SECONDS(reservations.dateTo) - TO_SECONDS(reservations.dateFrom))/3600) as hourAll, 
((TO_SECONDS(reservations.dateTo) - TO_SECONDS(reservations.dateFrom))/3600)* cars.price as priceAll
 FROM reservations left JOIN cars on (reservations.idCars = cars.id)
  where reservations.userId='$idUser' ORDER BY reservations.id DESC";



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
        echo $row["type"] . " ، " . $row["name0"]. " ، " . $row["model"]  . " ، " . $row["color"];
        echo '</td>';

        echo '<td>';
        echo $row["price"] . " ريال/ساعة";
        echo '</td>';

        echo '<td>';
        echo date('d-m-Y', strtotime($row["dateFrom"]));
        echo '</td>';

        echo '<td>';
        echo  date('H:i:s', strtotime($row["dateFrom"]));
        echo '</td>';

        echo '<td>';
        echo date('d-m-Y', strtotime($row["dateTo"]));
        echo '</td>'; 

        echo '<td>';
        echo  date('H:i:s', strtotime($row["dateTo"]));
        echo '</td>'; 

        echo '<td>';
        echo round($row["hourAll"], 2);
        echo '</td>'; 

        echo '<td>';
        echo round($row["priceAll"], 2);
        echo '</td>'; 

        

        echo '<td>';
        if ($row["Status"] == 0) {
          echo ' <span class="badge bg-info">تم الطلب</span>';
        }
        elseif ($row["Status"] == 1) {
            echo ' <span class="badge bg-success">الطلب مقبول</span>';
        }
        elseif ($row["Status"] == 2) {
            echo ' <span class="badge bg-primary">الطلب مكتمل</span>';
        }
        elseif ($row["Status"] == 3) {
            echo ' <span class="badge bg-danger">ملغي</span>';
          }
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