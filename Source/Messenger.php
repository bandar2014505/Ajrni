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
      
      <legend>الرسائل</legend>
      <input type="hidden" name="idmessenger" id="idmessenger" value="0"/>
        <div class="row ">
            <div class="col-sm-3">
                <div class="panel panel-primary">
    
                <div class="panel-heading" style="height:60px">
                    <div class="row">
                      <div class="col-sm-4">
    
                        المراسلات
                                        </div>
                      <div class="col-sm-8">
                        <input class="form-control" id="myInput" type="text" placeholder="بحث"  onkeyup="myFunction()">
                      </div>
                     </div>
                  </div>
    
                    <div class="panel-body">
    
                        <table class="table table-hover" id="myTable">
                            <tbody>
    
                            <?php 
                                 include 'includes/serverdb.php';
    if ($_SESSION['Permissions'] == 1) {
      $sql1 = "SELECT * FROM users where Permissions != 1";
    }
    elseif ($_SESSION['Permissions'] == 2) {
      $sql1 = "SELECT * FROM users where Permissions != 2";
    }
    elseif ($_SESSION['Permissions'] == 3) {
      $sql1 = "SELECT * FROM users where Permissions != 3";
    }
    $idUser = $_SESSION['idUser'];
    
    $conn->query("set NAMES utf8");
         $result2 = $conn->query($sql1);
         $i = 1;
         if ($result2->num_rows > 0) {
          while ($row = $result2->fetch_assoc()) {
            $id = $row["id"];
            echo '<tr style="height:60px">';
            echo '<td class="hidden">';
            echo  $row["id"];
            echo '</td>';
            echo '<td>';
            echo '<svg width="30" height="30" style=" padding-top:5px ;" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
          </svg>';
            echo '</td>';
    
            
    
            echo '<td style="width:80%; padding-top:15px">';
            echo  $row["fristName"];
            echo '</td><td style="padding-top:15px">';
            $sql0 = "SELECT count(id) as count0 FROM messages_es WHERE sender='$id' and receiver='$idUser' and status=0";
            $conn->query("set NAMES utf8");
            $result0 = $conn->query($sql0);
            $i = 1;
             while ($row1 = $result0->fetch_assoc()) {
              if ($row1["count0"] > 0) {
                echo '<span class="badge bg-danger" id="count1">';
                echo  $row1["count0"];
                echo '</span>';
                        }
    
             }
            echo '<td></tr>';
              }
             
        
            $i++;
    
           
         }
     ?>
    
    
     </tbody>
    </table>
    
        </div>
    </div>
    
    </div>
    
    <div class="col-sm-6">
                <div class="panel panel-info">
                <div class="panel-heading" style="height:70px; font-size:16px" id="nameM">
                ...</div>
                    <div class="panel-body">
    
                        <table class="table table-hover" id="myTable2">
                            <thead>
    
    <div class="col-sm-8">
    
    <div class="form-group">
    <input type="text" class="form-control" value="" id="textMessage" name="textMessage">
    </div>
    </div>
    
    
    <div class="col-sm-2">
    <div class="form-group">
    <button type="button"  class="btn btn-primary" onclick="sendmas()">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
    </svg>
    ارسال</button> 
    
    </div>
    
    </div>
    
    
     
    
    
    
                            </thead>
                            <tbody id="listnav_Notices">
    
    
    
    
    
     </tbody>
    </table>
    
        </div>
    
    
    
    </div>
    
    </div>
    
        </div>
            </div>

            <?php include 'includes/footer.php'; ?>
        </main>

        <script>

</script>
<script>

     var tbl = document.getElementById("myTable")
     for (var x = 0; x< tbl.rows.length; x++){
       tbl.rows[x].onclick = function(){
        document.getElementById("idmessenger").value = this.cells[0].innerHTML;
        document.getElementById("nameM").innerHTML = this.cells[1].innerHTML + this.cells[2].innerHTML;

        var idmessenger =  this.cells[0].innerHTML;
        this.cells[3].innerHTML = '';


$.ajax({
url:"MessengerRead.php",
method:"get",
data: 'idmessenger=' + idmessenger,
dataType:"json",
});


       }  

     }


     var input = document.getElementById("textMessage");

input.addEventListener("keyup", function(event) {
if (event.keyCode === 13) {
event.preventDefault();
sendmas();
}
});


     function myFunction() {
var input, filter, table, tr, td, i, txtValue;
input = document.getElementById("myInput");
filter = input.value.toUpperCase();
table = document.getElementById("myTable");
tr = table.getElementsByTagName("tr");
for (i = 0; i < tr.length; i++) {
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

function sendmas() {
var text =  $('#textMessage').val();
var idmessenger =  $('#idmessenger').val();

var datamas = {"text":text, "idmessenger": idmessenger}

if (idmessenger == 0) {
alert("Please select the recipient of the message");
}
else{
if (text === "") {
alert("Please write a message");
}
else{
$.ajax({
    url:"sendMessages.php",
method:"get",
data: datamas,
dataType:"json",


  });
  $('#textMessage').val("");

}

}
}



function idFile() {
$('#id').val($('#idmessenger').val()) ;

}




     </script>

</body>

</html>