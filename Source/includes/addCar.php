<div id="myModal" class="modal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">اضافة سيارة جديدة</h4>

                <button type="button" class="close pull-left" style="margin-left:8px;"
                    data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="idCars" class="form-label">رقم السيارة</label>
                                    <input class="form-control" type="text" name="idCars">
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="type" class="form-label">النوع</label>
                                    <input class="form-control" type="text" name="type">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name0" class="form-label">اسم السيارة</label>
                                    <input class="form-control" type="text" name="name0" id="name0">
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="model" class="form-label">الموديل</label>
                                    <input class="form-control" type="text" name="model">
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="color" class="form-label">اللون</label>
                                    <input class="form-control" type="text" name="color">
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="price" class="form-label">السعر/ساعة</label>
                                    <input class="form-control" type="text" name="price">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="file1" class="form-label">ارفاق الصورة</label>
                                    <input class="form-control" type="file" name="file1">
                                </div>
                            </div>

                        </div>

                    </div>



                    <div class="modal-footer">
                        <button name="save" id="save" class="btn btn-success pull-left">اضافة</button>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>

                    </div>
                </form>


            </div>
        </div>
    </div>
</div>


<div id="myModal2" class="modal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">تعديل تفاصيل السيارة</h4>

                <button type="button" class="close pull-left" style="margin-left:8px;"
                    data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-12">
                            <input class="form-control" type="hidden" id="id2" name="id2" id="formFile">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">رقم السيارة</label>
                                    <input class="form-control" type="text" id="idCars2" name="idCars2" id="formFile">
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">النوع</label>
                                    <input class="form-control" type="text" id="type2" name="type2" id="formFile">
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name1" class="form-label">اسم السيارة</label>
                                    <input class="form-control" type="text" name="name1" id="name1">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">الموديل</label>
                                    <input class="form-control" type="text" id="model2" name="model2" id="formFile">
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">اللون</label>
                                    <input class="form-control" type="text" id="color2" name="color2" id="formFile">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="price" class="form-label">السعر/ساعة</label>
                                    <input class="form-control" type="text" id="price2" name="price2" id="formFile">
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">ارفاق الصورة</label>
                                    <input class="form-control" type="file" name="file2" id="formFile">
                                </div>
                            </div>

                        </div>

                    </div>



                    <div class="modal-footer">
                        <button name="edit" id="edit" class="btn btn-success pull-left">تعديل</button>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>

                    </div>
                </form>


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
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">

                    <input type="hidden" name="id" id="id" value="" />

                    <h4>هل أنت متأكد من عملية الحذف</h4>

            </div>

            <div class="modal-footer">
                <button name="delete" id="delete" class="btn btn-success pull-left">تأكيد</button>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>

            </div>

            </form>

        </div>
    </div>
</div>