<!DOCTYPE html>

<head>
    <!-- Main Meta Rulez -->
    <meta charset="UTF-8" />
    <title>Ajrni</title>
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/app.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap_arabic/bootstrapArabic.css" rel="stylesheet" type="text/css">
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
      include 'includes/slider.php';
    ?>


            <div class="container">

                <div class="row">
                    <div class="col-sm-12" style=" margin-top: 60px">

                        <h1 style="color:black;"> ماذا يقدم Ajrni.com ؟</h1>
                    </div>

                    <div class="col-sm-12" style="margin-top: 50px">

                        <div class="col-sm-4" style="height: 300px;">
                            <div class="card mb-3 card1">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="border-style: none"><img src="images/1.png"
                                            class="img1"></li>
                                    <li class="list-group-item" style="border-style: none">
                                        <h3>أكبر موقع تأجير سيارات</h3>
                                    </li>
                                    <li class="list-group-item" style="border-style: none">هدفنا ايصالك الى السيارة
                                        الخرافية</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-4" style="height: 300px;">
                            <div class="card mb-3 card1">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="border-style: none"><img src="images/2.png"
                                            class="img1"></li>
                                    <li class="list-group-item" style="border-style: none">
                                        <h3>أكثر السيارات جمالاً</h3>
                                    </li>
                                    <li class="list-group-item" style="border-style: none">يحتوي على أكثر السيارات
                                        جمالاً في العالم</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-4" style="height: 300px;">
                            <div class="card mb-3 card1">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="border-style: none"><img src="images/3.png"
                                            class="img1"></li>
                                    <li class="list-group-item" style="border-style: none">
                                        <h3>أفضل الماركات العالمية</h3>
                                    </li>
                                    <li class="list-group-item" style="border-style: none">اختر سيارتك المفضلة من أفضل
                                        الماركات العالمية</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-4" style="height: 300px;">
                            <div class="card mb-3 card1">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="border-style: none"><img src="images/4.png"
                                            class="img1"></li>
                                    <li class="list-group-item" style="border-style: none">
                                        <h3>تابع مسار تأجيرك</h3>
                                    </li>
                                    <li class="list-group-item" style="border-style: none">يمكنك متابعة تفاصيل التأجير
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-4" style="height: 300px;">
                            <div class="card mb-3 card1">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="border-style: none"><img src="images/5.png"
                                            class="img1"></li>
                                    <li class="list-group-item" style="border-style: none">
                                        <h3>انشئ حسابك الشخصي</h3>
                                    </li>
                                    <li class="list-group-item" style="border-style: none">يمكنك من متابعة جميع تفاصيل
                                        الحجوزات</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-4" style="height: 300px;">
                            <div class="card mb-3 card1">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="border-style: none"><img src="images/6.png"
                                            class="img1"></li>
                                    <li class="list-group-item" style="border-style: none">
                                        <h3>اختر سياراتك المفضلة</h3>
                                    </li>
                                    <li class="list-group-item" style="border-style: none">اختر سيارتك وقم بتأجيرها في
                                        أقل من دقائق</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <?php include 'includes/footer.php'; ?>
        </main>


</body>

</html>
