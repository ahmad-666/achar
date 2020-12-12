<?php
include('files/header.php');
?>
    <div class="container">
        <div class="row ltr">
            <div class="col-md-4 col-md-8 offset-md-2">
                <div class="main-box rtl login">
                    <header>
                        <ul class="tabs">
                            <li>ورود به سایت</li>
                            <li class="active">ثبت نام</li>
                        </ul>
                    </header>
                    <div class="tab-login hide">
                        <form>
                            <section>

                                <div class="form-group">
                                    <label for="inputNum">شماره موبایل :</label>
                                    <input type="text" class="form-control" value=""
                                           onchange="this.setAttribute('value', this.value);" id="inputNum">
                                </div>
                                <div class="form-group">
                                    <label for="forgot-password">رمزعبور :</label>
                                    <label class="forgot-password"><a href="#">رمز خود را فراموش کرده‌اید؟</a></label>
                                    <input type="password" class="form-control" value=""
                                           onchange="this.setAttribute('value', this.value);" id="forgot-password">
                                </div>
                                <div class="d-flex justify-content-between align-items-center pt-1">
                                    <label class="container">مرا به خاطر بسپار
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <button class="btn btn-success">عضویت</button>
                                </div>
                            </section>
                        </form>
                        <footer>
                            <a href="#">کاربرجدید هستید؟‌از ایـــــنجا ثبت نام کنید</a>
                        </footer>
                    </div>
                    <div class="tab-sing-up">
                        <p class="text-center m-0 pt-4">نوع حساب کاربری خود را انتخاب کنید</p>
                        <section class="sign-up-tabs">
                            <button class="btn btn-default">کاربر عادی</button>
                            <button class="btn btn-default">ابزار فروش</button>
                            <button class="btn btn-default active">مشتری سازمانی</button>
                        </section>
                        <div>
                            <form>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">نام و نام خانوادگی :</label>
                                                <input type="text" class="form-control" value=""
                                                       onchange="this.setAttribute('value', this.value);" id="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputNum">شماره موبایل :</label>
                                                <input type="text" class="form-control" value=""
                                                       onchange="this.setAttribute('value', this.value);" id="inputNum">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pass">رمز عبور :</label>
                                                <input type="text" class="form-control" value=""
                                                       onchange="this.setAttribute('value', this.value);" id="pass">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pass2">تکرار رمز عبور :</label>
                                                <input type="text" class="form-control" value=""
                                                       onchange="this.setAttribute('value', this.value);" id="pass2">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pass">نام شرکت :</label>
                                                <input type="text" class="form-control" value=""
                                                       onchange="this.setAttribute('value', this.value);" id="pass">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pass2">تلفن ثابت شرکت :</label>
                                                <input type="text" class="form-control" value=""
                                                       onchange="this.setAttribute('value', this.value);" id="pass2">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div class="row ltr text-center">
                                        <div class="col-md-6 offset-md-3 rtl">
                                            <label class="container">حریم خصوصی و قوانین و مقررات سایت را مطالعه کرده و
                                                موافقم
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>

                                            <img src="img/captcha.png" class="captcha" alt="">

                                            <div>
                                                <button class="btn btn-success w-100">عضویت</button>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include('files/footer.php');
?>