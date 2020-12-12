<?php
include('files/header.php');
?>
    <div class="container">
        <div class="row ltr">
            <div class="col-md-4 offset-md-4 p-0">
                <div class="main-box rtl login">
                    <header class="title-3 text-center">
                        <h3>شماره شما: ۰۹۳۸۷۸۸۰۲۶۲ <span class="text-danger">(تغییر)</span></h3>
                    </header>
                    <section class="tab-login">
                        <form>
                            <div class="form-group">
                                <label for="inputNum" class="text-center w-100">کد ۵ رقمی دریافتی را در این فیلد قرار دهید</label>
                                <input type="text" class="form-control" value=""
                                       onchange="this.setAttribute('value', this.value);" id="inputNum">
                            </div>
                            <button class="btn btn-success w-100">ثبت کد</button>
                        </form>
                    </section>
                    <footer class="p-4">
                        <button class="btn btn-default w-100">ارسال مجدد (۵۳)</button>
                    </footer>
                </div>
            </div>
        </div>
    </div>
<?php
include('files/footer.php');
?>