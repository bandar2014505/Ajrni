<footer class="text-center text-lg-start bg-light text-black" style="background-color:#E9ECEF;">

    <div class="container">
        <div class="row" style="margin-top:40px;color:black">

            <div class="col-sm-4">
                <h5>موقع اجرني لتاجير السيارات</h5>
                <p>
                    موقع اجرني يربط مكاتب تاجير السيارات بالعميل ويتيح للعميل ان يرى شركات التاجير وسياراتها واسعارها
                    وحجز السيارة المناسبة له ودفع المبلغ والذهاب لاستلامها ويتيح ايضاً لمكاتب التاجير عرض السيارات
                    المتاحه وسعر تاجيرها اليومي والموافقة على طلب العميل
                </p>


            </div>

            <div class="col-sm-4">
                <h5 class="text-uppercase fw-bold mb-4">
                    Useful links
                </h5>

                <?php 
                   if (isset($_SESSION['idUser'])) {
                    if ($_SESSION['Permissions'] == 1) {
                        echo '<p><a href="MyCars.php" class="text-reset">السيارات</a></p>';
                        echo '<p><a href="OrderCars.php" class="text-reset">الطلبات</a></p>';
                        echo '<p><a href="MyReservationsCars.php" class="text-reset">الحجوزات الحالية</a></p>';
                        echo '<p><a href="ReportsCompany.php" class="text-reset">التقارير</a></p>';
                   }
                   
                   if ($_SESSION['Permissions'] == 2) {
                    echo '<p><a href="CarReservation.php" class="text-reset">احجز الآن</a></p>';
                    echo '<p><a href="MyReservations.php" class="text-reset">الحجوزات الحالية</a></p>';
                    echo '<p><a href="MyReservationsPrecedent.php" class="text-reset">الحجوزات السابقة</a></p>';
               }
                   
                }
                   ?>

            </div>

            <div class="col-sm-4">

                <h5 class="text-uppercase fw-bold mb-4">
                    تواصل معنا
                </h5>
                <p><i class="fas fa-home me-3"></i> الرياض</p>
                <p>
                    <i class="fas fa-envelope me-3"></i>
                    carjrni@Ajrni.com
                </p>
                <p><i class="fas fa-phone me-3"></i> 96655057065+</p>


            </div>

        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);height:50px;padding-top:15px;">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="index.php">Ajrni</a>
    </div>
    <!-- Copyright -->
</footer>
