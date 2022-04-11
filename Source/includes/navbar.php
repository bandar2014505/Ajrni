
   
        <div class="navbar" style="background-color:#F11717;color:#FFFFFF;height:120px;">
            <div class="container">
                <div class="navbar-header" style="float: right">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse"  style="color:#FFFFFF;">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"  style="background-color:#FFFFFF"></span>
                        <span class="icon-bar"  style="background-color:#FFFFFF;"></span>
                        <span class="icon-bar"  style="background-color:#FFFFFF;"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                        <img  src="images/logo1.png" style="height: 110px;width: 110px"></a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse"  style="float: right">

                    <ul class="nav navbar-nav">


                    <li style="float: right" class="li1"><a href="index.php" class="lia" style="color:#FFFFFF;margin-top:20px;font-size:76px;">Ajrni</a></li>

                    <?php 
                   if (isset($_SESSION['idUser'])) {
                    echo '  <li style="float: right" class="li1"><a href="" class="lia" style="color:#FFFFFF;margin-top:20px;font-size:24px;">الرئيسية</a></li>';
                   }
                ?>

                    </ul>

 
                </div>
                                   <!-- Right Side Of Navbar -->
                                   <ul class="nav navbar-nav"  style="float: left;margin-left: 20px">
                                    <!-- Authentication Links -->
                                    <?php 
                                    if (isset($_SESSION['idUser'])) {
                                      echo  '<li class="dropdown li1" >
                                      <a href="#" class="dropdown-toggle lia"  style="color:#FFFFFF;margin-top:20px;font-size:24px;" data-toggle="dropdown" role="button" aria-expanded="false">
                                       ';
                                       if (isset($_SESSION['nameUser'])) {
                                        echo $nameUser . " ";
                                       }
                                       echo '<span class="caret"></span>
                                      </a>
      
                                      <ul class="dropdown-menu" role="menu">
                                          <li> <a class="dropdown-item" href="Change_Password.php">تغيير كلمة المرور</a></li>
                                          <div class="dropdown-divider"></div>

                                          <li> <a href="logout.php">تسجيل خروج</a></li>
                                      </ul>
                                  </li>';
                                    }
                                    else {
                                        echo  '<li class="li1"><a href="Sing_Up.php" class="lia"  style="color:#FFFFFF;margin-top:20px;font-size:24px;">تسجيل حساب جديد</a></li>';
                                        echo  '<li class="li1"><a href="sign_in.php" class="lia"  style="color:#FFFFFF;margin-top:20px;font-size:24px;">تسجيل الدخول</a></li>';

                                    }
                                    ?>
                                        <!--  <li><a href="{{ route('register') }}">حساب جديد</a></li> -->

                                </ul>
            </div>
          </div>

