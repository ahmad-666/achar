<?php
include('files/header.php');
?>
<div class="container">

    <div class="row profile-edit">
        <?php
        include('files/sidebar.php');
        ?>
        <div class="col-md-9">
            <div class="main-box">
                <form>
                    <section class="">
                        <header>
                            <h2>ویرایش پروفایل</h2>
                            <a href="#">خروج از حساب</a>
                        </header>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputName">نام و نام خانوادگی :</label>
                                    <input type="text" class="form-control" value=""
                                           onchange="this.setAttribute('value', this.value);" id="inputName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputPhone">شماره همراه :</label>
                                    <input type="text" class="form-control" value=""
                                           onchange="this.setAttribute('value', this.value);" id="inputPhone" placeholder="اختیاری">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputEmail">ایمیل :</label>
                                    <input type="email" class="form-control" value=""
                                           onchange="this.setAttribute('value', this.value);" id="inputEmail" placeholder="اختیاری">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputDate">تاریخ تولد :</label>
                                    <input type="date" class="form-control" value=""
                                           onchange="this.setAttribute('value', this.value);" id="inputDate" placeholder="اختیاری">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <header>
                            <h2>تغییر رمزعبور</h2>
                        </header>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="currentPassword">رمزعبور فعلی :</label>
                                    <input type="password" class="form-control" value=""
                                           onchange="this.setAttribute('value', this.value);" id="currentPassword">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="newPassword">رمزعبور جدید :</label>
                                    <input type="password" class="form-control" value=""
                                           onchange="this.setAttribute('value', this.value);" id="newPassword">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="newPassword1">تکرار رمزعبور جدید :</label>
                                    <input type="password" class="form-control" value=""
                                           onchange="this.setAttribute('value', this.value);" id="newPassword1">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="text-center">
                        <button class="btn btn-success">ثبت اطلاعات</button>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include('files/footer.php');
?>