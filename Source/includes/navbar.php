
        <script class="u-script" type="text/javascript" src="js/messengerupdate1.js" defer=""></script>

<div class="navbar" style="background-color:#F11717;color:#FFFFFF;min-height:105px;">
    <div class="container">
        <div class="navbar-header" style="float: right">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#app-navbar-collapse" style="color:#FFFFFF;">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar" style="background-color:#FFFFFF"></span>
                <span class="icon-bar" style="background-color:#FFFFFF;"></span>
                <span class="icon-bar" style="background-color:#FFFFFF;"></span>
            </button>

            <a class="navbar-brand" href="index.php">
                <img src="images/logo2.png" style="width: 120px"></a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse" style="float: right">

            <ul class="nav navbar-nav">
            <li style="float: right" class="li1"><a href="index.php" class="lia" style="color:#FFFFFF;margin-top:20px;font-size:20px;">الرئيسية</a></li>

                <?php 

if (!isset($_SESSION['idUser'])) {
    echo ' <li class="dropdown li1" style="float: right;">
    <a href="#" class="dropdown-toggle lia" style="color:#FFFFFF;margin-top:20px;font-size:20px;"
        data-toggle="dropdown" role="button" aria-expanded="false">
        احجز الآن <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li> <a class="dropdown-item" href="CarReservation.php">عرض الجميع</a></li>
        <div class="dropdown-divider"></div>';

             include 'includes/serverdb.php';

$sql1 = "SELECT type FROM cars GROUP BY type ";
$conn->query("set NAMES utf8");
$result2 = $conn->query($sql1);
$i = 1;
if ($result2->num_rows > 0) {
while ($row = $result2->fetch_assoc()) {
echo ' <li> <a class="dropdown-item" href="CarReservation.php?type='. $row["type"] . '">'. $row["type"] . '</a></li>
<div class="dropdown-divider"></div>';
$i++;
}}
echo '</ul></li>';
}


                   if (isset($_SESSION['idUser'])) {

                    if ($_SESSION['Permissions'] == 1) {
                        echo '  <li style="float: right" class="li1"><a href="MyCars.php" class="lia" style="color:#FFFFFF;margin-top:20px;font-size:20px;">السيارات</a></li>';
                        echo '  <li style="float: right" class="li1"><a href="OrderCars.php" class="lia" style="color:#FFFFFF;margin-top:20px;font-size:20px;">الطلبات</a></li>';
                        echo '  <li style="float: right" class="li1"><a href="MyReservationsCars.php" class="lia" style="color:#FFFFFF;margin-top:20px;font-size:20px;">الحجوزات الحالية</a></li>';
                        echo '  <li style="float: right" class="li1"><a href="ReportsCompany.php" class="lia" style="color:#FFFFFF;margin-top:20px;font-size:20px;">التقارير</a></li>';
                    }        
                    
                    if ($_SESSION['Permissions'] == 2) {
                        
                        echo ' <li class="dropdown li1" style="float: right;">
                        <a href="#" class="dropdown-toggle lia" style="color:#FFFFFF;margin-top:20px;font-size:20px;"
                            data-toggle="dropdown" role="button" aria-expanded="false">
                            احجز الآن <span class="caret"></span>
                        </a>
    
                        <ul class="dropdown-menu" role="menu">
                        <li> <a class="dropdown-item" href="CarReservation.php">عرض الجميع</a></li>
                        <div class="dropdown-divider"></div>';

                                 include 'includes/serverdb.php';
    
      $sql1 = "SELECT type FROM cars GROUP BY type ";
    $conn->query("set NAMES utf8");
         $result2 = $conn->query($sql1);
         $i = 1;
         if ($result2->num_rows > 0) {
          while ($row = $result2->fetch_assoc()) {
          echo ' <li> <a class="dropdown-item" href="CarReservation.php?type='. $row["type"] . '">'. $row["type"] . '</a></li>
          <div class="dropdown-divider"></div>';
          $i++;
          }}
          echo '</ul></li>';

                        echo '  <li style="float: right" class="li1"><a href="MyReservations.php" class="lia" style="color:#FFFFFF;margin-top:20px;font-size:20px;">حجوزاتي الحالية</a></li>';
                        echo '  <li style="float: right" class="li1"><a href="MyReservationsPrecedent.php" class="lia" style="color:#FFFFFF;margin-top:20px;font-size:20px;">حجوزاتي السابقة</a></li>';
                    
                        
                    }    
                    
                   
                    if ($_SESSION['Permissions'] == 3) {
                        echo '  <li style="float: right" class="li1"><a href="users.php" class="lia" style="color:#FFFFFF;margin-top:20px;font-size:20px;">المستخدمين</a></li>';
                        echo '  <li style="float: right" class="li1"><a href="ReportsAdmin.php" class="lia" style="color:#FFFFFF;margin-top:20px;font-size:20px;">التقارير</a></li>';
                 

                    }

                }
                ?>

            </ul>


        </div>

        <ul class="nav navbar-nav" style="float: left;margin-left: 20px">

            <?php 
                                    if (isset($_SESSION['idUser'])) {


      


                                      echo  '<li class="dropdown li1" style="float: left" >
                                      <a href="#" class="dropdown-toggle lia"  style="color:#FFFFFF;margin-top:20px;font-size:20px;" data-toggle="dropdown" role="button" aria-expanded="false">
                                       ';
                                       if (isset($_SESSION['nameUser'])) {
                                        echo $nameUser . " ";
                                       }
                                       echo '<span class="caret"></span>
                                      </a>
      
                                      <ul class="dropdown-menu" role="menu">
                                          <li> <a class="dropdown-item" href="Change_Password.php">
                                          <svg  width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                          
                                          تغيير كلمة المرور</a></li>
                                          <div class="dropdown-divider"></div>

                                          <li> <a href="logout.php">
                                          <svg  width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>  
                                          تسجيل خروج</a></li>
                                      </ul>
                                  </li>';
                                  echo '
                                  <li class="li1"><a href="Messenger.php"  style="float: left;color:#FFFFFF;margin-top:20px;font-size:20px;">
                                  <span class="badge badge-pill pull-left" style="position: relative; top: -10px; left: 40px;background-color:white;color:red" id="countmas">0</span>
                            
                                    <svg color="white" width="24" height="24" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
  <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>

                            
                              </a>
                              
                            
                            </li>';

                                                                                
                                  echo '
                                  <li class="li1"><a href="notifications.php" style="float: left;color:#FFFFFF;margin-top:20px;margin-left:0px;font-size:20px;">
                                  <span class="badge badge-pill pull-left" style="position: relative; top: -10px; left: 40px;background-color:white;color:red" id="countmas2">0</span>
                            
                                  <svg color="white" width="24" height="24"  fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                                </svg>
                            
                              </a>
                            
                            </li>';




                                    }
                                    else {
                                        echo  '<li class="li1"><a href="Sing_Up.php" class="lia"  style="color:#FFFFFF;margin-top:20px;font-size:20px;">تسجيل حساب جديد</a></li>';
                                        echo  '<li class="li1"><a href="sign_in.php" class="lia"  style="color:#FFFFFF;margin-top:20px;font-size:20px;">تسجيل الدخول</a></li>';

                                    }
                                    ?>

        </ul>
    </div>
</div>