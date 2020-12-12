<?php
include('files/header.php');
?>

    <div class="container">

        <div class="row add-address">
            <?php
            include('files/sidebar.php');
            ?>
            <div class="col-md-9 score">
                <div class="main-box">
                    <section class="">
                        <header>
                            <h2 class="m-0">شما تابحال آدرسی ثبت نکرده اید.</h2>
                            <a href="#" onclick="showModal()">افزودن آدرس جدید</a>
                        </header>
                        <div class="address">
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="modal">
        <div>
            <div class="container">
                <div class="row ltr">
                    <div class="col-md-4 offset-md-4">
                        <div class="main-box rtl">

                            <header class="title-3 text-center">
                                <h3>افزودن آدرس جدید</h3>
                                <i class="fa fa-times close"></i>
                            </header>
                            <div class="p-4">
                                <form>
                                    <div class="form-group">
                                        <label>استان</label>
                                        <div class="select-box-c">
                                            <input type="hidden" value="">
                                            <span>-</span>
                                            <div class="button"><i class="fa fa-angle-down"></i></div>
                                            <div class="items">
                                                <ul>
                                                    <li>
                                                        تهران
                                                    </li>
                                                    <li>
                                                        مشهد
                                                    </li>
                                                    <li>
                                                        اصفهان
                                                    </li>
                                                    <li>
                                                        یزد
                                                    </li>
                                                    <li>
                                                        البرز
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>شهر</label>
                                        <div class="select-box-c">
                                            <input type="hidden" value="">
                                            <span>-</span>
                                            <div class="button"><i class="fa fa-angle-down"></i></div>
                                            <div class="items">
                                                <ul>
                                                    <li>
                                                        تهران
                                                    </li>
                                                    <li>
                                                        مشهد
                                                    </li>
                                                    <li>
                                                        اصفهان
                                                    </li>
                                                    <li>
                                                        یزد
                                                    </li>
                                                    <li>
                                                        البرز
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ostan">استان</label>
                                        <textarea id="ostan"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="zipcode">استان</label>
                                        <input name="zipcode" id="zipcode"></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="receiver">گیرنده</label>
                                        <input name="receiver" id="receiver"></input>
                                    </div>
                                    <div>
                                        <button class="btn btn-success w-100 mt-2">ثبت اطلاعات</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include('files/footer.php');
?>