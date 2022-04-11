
<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<head >
    <!-- Main Meta Rulez -->
    <meta charset="UTF-8" />
    <title>Ajrni</title>
    <!-- Very Nice Reset -->
    <link rel="stylesheet" href="css/normlaize.css">
    <!-- Main Css style file-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mew.css">
    <!-- Font Icon Library-->
    <link rel="stylesheet" href="css/fontawesome.min.css">


</head>
<body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <div class="coatainer1 me-auto">
      <!--Start Header-->
        <header>
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
       <img src="images/logo1.png" alt="Logo" />
          <div class="container-fluid">
          
            <a class="navbar-brand" href="#">Ajrni</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">></span>
            </button>
        
            <div class="navbar-collapse collapse show" id="navbarColor01" >
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="Ajrni.html"><h3>الرئيسية</h3>
                    <span class="visually-hidden">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><h3>العروض</h3></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.php"><h3>انشاء حساب</h3></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About<h4>Ajrni</h4></a>
                </li>
               
                </div>
                
              </ul>
              
            </div>
          </div>
        </nav>


      
        </header>
     
       <main>

        


        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="images/Logo.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
      
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>قم بتسجيل الدخول لروئية العروض.</h1>
                  <p>أهلاً بك في Ajrni.com
                    ذلك الإحساس الرائع عندما تدير محرك السيارة لتبدأ مغامرتك
                    
                    يتركز كل ما نقوم به في Ajrni.com حول إعطائك الحرية في اكتشاف المزيد. سنعمل المستحيل لتحصل أنت على السيارة الأنسب للإيجار وتجربة سلسة خالية من المتاعب من البداية إلى النهاية. هنا يمكنك معرفة المزيد حول طريقة عملنا.</p>
                  <p><a class="btn btn-lg btn-primary" href="#">سجل الان</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" src="images/Logo.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
      
              <div class="container">
                <div class="carousel-caption">
                  <h1>من نحن.</h1>
                  <p>أهلاً بك في Ajrni.com
                    ذلك الإحساس الرائع عندما تدير محرك السيارة لتبدأ مغامرتك
                    
                    يتركز كل ما نقوم به في Ajrni.com حول إعطائك الحرية في اكتشاف المزيد. سنعمل المستحيل لتحصل أنت على السيارة الأنسب للإيجار وتجربة سلسة خالية من المتاعب من البداية إلى النهاية. هنا يمكنك معرفة المزيد حول طريقة عملنا..</p>
                  <p><a class="btn btn-lg btn-primary" href="#">أعرف أكثر</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item active">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
      
              <div class="container">
                <div class="carousel-caption text-end">
                  <h1>واحد أكثر لقياس جيد.</h1>
                  <p>الإحصاءات لحجم الاستثمار اللغوي خارج بريطانيا تتفاوت من سنة لأخرى إلا أن المدير التنفيذي للمجلس الثقافي البريطاني إدي بايرز يرى أن استثمار تعليم الإنجليزية في الخارج لا يحسب على المستوى المالي فحسب بل على المستوى السياسي أيضاً.</p>
                  <p><a class="btn btn-lg btn-primary" href="#">تصفح المعرض</a></p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">السابق</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">التالي</span>
          </button>
        </div>

        
             

               <!-- End widget -->
               
               
                <div class="wrapper">
                  
                <div class="sidebar flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">قائمة الأقسام</span>
              </a>
              <hr>
              <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                  <a href="#" class="nav-link active" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    سيارات السيدان
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    سيارات الهاتشباك
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    سيارات SUV
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                    سيارات الكروسوفر
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    حجوزاتي السابقة
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    حجوزاتي السابقة
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    حجوزاتي السابقة
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    حجوزاتي السابقة
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    حجوزاتي السابقة
                  </a>
                </li>
              </ul>
              <hr>
              <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="images/qw.png" alt="" width="32" height="32" class="rounded-circle me-2">
                  <strong><?php echo htmlspecialchars($_SESSION["username"]); ?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                  
                  <li><a class="dropdown-item" href="reset-password.php">تغير كلمة المرور</a></li>
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                </ul>
              </div>
            </div>
                  <div class="container_product">
                    
                    <div class="card_image">
                              <section class="card">
                                <a href="#" class="image"><img src="images/accent-hc-quarter-view-silk-silver-pc.webp"   alt="" /></a>
                                <div class="inner"><center>
                                  <header style="margin: 20px">
                                    <h2>الاسم1</h2>
                                    <p>السعر</p>
                                  </header>
                                  <p>الوصف</p>
                                </center>
                                <a href="#" class="btn btn-primary">احجز الان</a>
                               </div>
                              </section>            
                          </div>
                       
            
                            <!-- قالب -->
                            <div class="card_image">
                              <section class="card">
                                <a href="#" class="image"><img src="images/accent-hc-quarter-view-silk-silver-pc.webp" alt="" /></a>
                                <div class="inner"><center>
                                  <header style="margin: 20px">
                                    <h2>الاسم2</h2>
                                    <p>السعر</p>
                                  </header>
                                  <p class = > الوصف</p>
                                  </center>
                                  <a href="#" class="btn btn-primary">احجز الان</a>
                               </div>
                              </section>
            
                          </div>
                           <!-- قالب -->
                          <div class="card_image">                                                     
                              <section class="card">
                                <a href="#" class="image featured"><img src="images/accent-hc-quarter-view-silk-silver-pc.webp" alt="" /></a>
                                <div class="inner"><center>
                                  <header style="margin: 20px">
                                    <h2>الاسم3</h2>
                                    <p>السعر</p>
                                  </header>
                                  <p>الوصف</p>
                                  <a href="#" class="btn btn-primary">احجز الان</a>
                                </center>
                                </div>
                              </section>
            
                          </div>
                            <!-- قالب -->
                          <div class="card_image">
                              <section class="card">
                                <a href="#" class="image featured"><img src="images/accent-hc-quarter-view-silk-silver-pc.webp" alt="" /></a>
                                <div class="inner"><center>
                                  <header style="margin: 20px">
                                    <h2>الاسم4</h2>
                                    <p>السعر</p>
                                  </header>
                                  <p>الوصف</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </center></div>
                              </section>
                          </div>
                        
            
                            <!-- قالب -->
                            <div class="card_image">
                              <section class="card">
                                <a href="#" class="image featured"><img src="images/accent-hc-quarter-view-silk-silver-pc.webp" alt="" /></a>
                                <div class="inner"><center>
                                  <header style="margin: 20px">
                                    <h2>الاسم5</h2>
                                    <p>السعر</p>
                                  </header>
                                  <p>الوصف</p>
                                  <a href="#" class="btn btn-primary">احجز الان</a>
                                </center></div>
                              </section>
            </div>
                          
                          
            
                            <!-- قالب -->
                            <div class="card_image">
                              <section class="card">
                                <a href="#" class="image featured"><img src="images/accent-hc-quarter-view-silk-silver-pc.webp" alt="" /></a>
                                <div class="inner"><center>
                                  <header style="margin: 20px">
                                    <h2 >6الاسم</h2>
                                    <p>السعر</p>
                                  </header>
                                  <p>الوصف</p>
                                  <a href="#" class="btn btn-primary">احجز الان</a>
                                </center></div>
                              </section>
                        </div>
                      </div>
                    </div>
            
      </section>



      

             <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-black">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>موقع اجرني لتاجير السيارات
          </h6>
          <p>
          موقع اجرني يربط مكاتب تاجير السيارات بالعميل ويتيح للعميل ان يرى شركات التاجير وسياراتها واسعارها وحجز السيارة المناسبة له ودفع المبلغ والذهاب لاستلامها ويتيح ايضاً لمكاتب التاجير عرض السيارات المتاحه وسعر تاجيرها اليومي والموافقة على طلب العميل
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
       
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">حجوزات سابقة</a>
          </p>
          <p>
            <a href="#!" class="text-reset">الاعدادت</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">مساعدة</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
          تواصل معنا
          </h6>
          <p><i class="fas fa-home me-3"></i> الرياض</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            carjrni@Ajrni.com
          </p>
          <p><i class="fas fa-phone me-3"></i> 96655057065+</p>
         
        </div>
      </div>
    </div>
  </section>
            <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
          <a class="text-reset fw-bold" href="index.php">Ajrni</a>
          </div>
        <!-- Copyright -->
          </footer>
          <!-- Footer -->
             </main>
           <!-- End Footer -->
    </div>
  
   </body>
</html>