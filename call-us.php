<?php
include('files/header.php');
?>
    <div class="call-us container">
        <div class="main-box product-info">
            <header class="title-3">
                <h3>تماس باما</h3>
            </header>
            <div class="send-comment">
                <form class="m-0">
                    <p class="text font-14">کاربر عزیز اگر مشاوره، سوال و یا انتقادی از سایت و نحوه ارسال دارید پیغام خود را برای ما بفرستید. در کمتر از ۱۰ دقیقه به شما پاسخ خواهد داده شد.</p>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName">نام کامل <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value=""
                                       onchange="this.setAttribute('value', this.value);" id="inputName">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputPhone">شماره موبایل</label>
                                <input type="text" class="form-control" value=""
                                       onchange="this.setAttribute('value', this.value);" id="inputPhone">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputPhone">ایمیل (اختیاری)</label>
                                <input type="text" class="form-control" value=""
                                       onchange="this.setAttribute('value', this.value);" id="inputPhone">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputPhone">پیام شما:</label>
                                <textarea class="form-control" onchange="this.setAttribute('value', this.value);"
                                          id="inputPhone"> </textarea>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-between align-items-center mt-3">
                            <img src="img/captcha.png" class="captcha" alt="">
                        </div>
                        <div class="col-md-6 d-flex justify-content-end align-items-center mt-3">
                            <button class="btn btn-success">ارسال پیام</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
include('files/footer.php');
?>