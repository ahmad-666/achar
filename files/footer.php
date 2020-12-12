</div>
</div>
</div>

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h3>اطلاعات</h3>
                <ul>
                    <li>درباره ما</li>
                    <li>تماس با ما</li>
                    <li>قوانین سایت</li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3>خدمات</h3>
                <ul>
                    <li>ابزار برقی</li>
                    <li>ابزار کشاورزی</li>
                    <li>ابزار شارژی</li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3>حساب کاربری</h3>
                <ul>
                    <li>عضویت</li>
                    <li>شرایط و قوانین</li>
                    <li>ارسال تیکت</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>تماس با ما</h3>
                <p>
                    بابلسر خیابان پاسداران ۱۷ دفتر آچار ۱۳
                    info@achar13.com
                </p>
                <h2>۰۲۱-۲۸۴۲۸۵۸۵</h2>
            </div>
            <div class="col-md-3 pt-4 pt-md-0">
                <div class="row">
                    <div class="col-6">
                        <img src="img/logo1.png" class="logo" alt="">
                    </div>
                    <div class="col-6">
                        <img src="img/logo2.png" class="logo" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row license">
            <small>تمامی حقوق مادی و معنوی این سایت متعلق به گروه آچار ۱۳ می باشد</small>
            <div class="icons">
                <a href="#"><i class="fal fa-envelope-open-text"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-telegram-plane"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</footer>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="Plugin/bootstrap-4.0/js/bootstrap.js"></script>
<script src="Plugin/flipTimer/js/jquery.flipTimer.js"></script>
<script src="Plugin/magnify-image-hover/js/jquery.jqZoom.js"></script>
<script>

    $(document).ready(function () {


        $('.home-page .special-sale-slider .slider-buttons ul li').click(function () {
            $('.home-page .special-sale-slider .slider-buttons ul li').removeClass('active');
            $(this).addClass('active');
            $('.home-page .special-sale-slider .swiper-slide').hide();
            $('.home-page .special-sale-slider .swiper-slide').eq($(this).index()).fadeIn();
        });


        $('.nav-bar-main-bottom > ul > li.category > div .category-items li').click(function () {
            $('.nav-bar-main-bottom > ul > li.category > div .category-items li').removeClass('active');
            $(this).addClass('active');
            $('.nav-bar-main-bottom > ul > li.category > div .category-sub .body > div').hide();
            $('.nav-bar-main-bottom > ul > li.category > div .category-sub .body > div').eq($(this).index()).fadeIn();
            $('.nav-bar-main-bottom > ul > li.category > div .category-sub header h6 span').text($(this).text());
        });

        $('.search-box .category-items li').click(function () {
            $('.category-items li').removeClass('active');
            $(this).addClass('active');
            $('.category-selected').text($(this).text());
        });

        $('.category-select').click(function () {
            $(this).toggleClass('focus');
        });

        $('.nav-bar-main-bottom > ul > li.category>a').click(function () {
            $('.nav-bar-main-bottom > ul > li.category>div').slideToggle();
        });

        $('.main-content').click(function () {

            $('.nav-bar-main-bottom > ul > li.category>div').slideUp();
            if ($('.category-select').hasClass('focus')) {
                $('.category-select').removeClass('focus');
            }
        });

        $('.main-content,.header-main,.main-footer').click(function () {
            $('.menu-mobile').addClass('hidden');
        });

        $(document).on('click','.nav-bar-main-bottom > i',function () {
            $('.menu-mobile').toggleClass('hidden');
        });

        $('.select-box-c').click(function () {
            $(this).find('.items').slideToggle();
        });

        $('.select-box-c .items li').click(function () {
            $(this).closest('.select-box-c').find('li').removeClass('active');
            $(this).addClass('active');
            $(this).closest('.select-box-c').find('span').text($(this).text());
        });

        $('.menu-mobile>ul>li>div').click(function () {
            $(this).closest('li').find('>ul').slideToggle();
        });

        $('.menu-mobile>ul>li i').click(function () {
            $(this).closest('li').find('>ul').slideToggle();
        });

        $('.score .main-box ul li a ').click(function () {
            $(this).closest('li').find('p').slideToggle();
        });

        $('.category-search .header').click(function () {
            $('.category-search .body').slideToggle();
        });

        $('.login .tabs li').click(function () {
            $('.login .tabs li').removeClass('active');
            $(this).addClass('active');
            $('.main-box.login>div').hide();
            if ($(this).index() == 0) {
                $('.tab-login').show();
            } else {
                $('.tab-sing-up').show();
            }


        });

        $('.product-page .product-box .gallery ul li img').click(function () {
            $('.zoom-box img').attr('src', $(this).attr('src'));
        });

        $('a').click(function () {
            $(this).closest('div').find('a').removeClass('active');
            $(this).addClass('active');
        });

        $('.product-page .product-info .show-more').click(function () {
            $('.product-page .product-info').removeClass('height-30');
            $(this).fadeOut();
        });

        $('.modal .close').click(function () {
            $('.modal').fadeOut();
        });
    });

    $(function () {
        $(".zoom-box img").jqZoom({
            selectorWidth: 30,
            selectorHeight: 30,
            viewerWidth: 350,
            viewerHeight: 350
        });
    });

    function showModal() {
        $('.modal').fadeIn();
    }




    var swiper = new Swiper('.banners .swiper-container', {
    });

    var swiper = new Swiper('.product-slider .swiper-container', {
        slidesPerView: 5,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.5,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            // when window width is >= 992px
            992: {
                slidesPerView: 5,
                spaceBetween: 25
            }
        }
    });

    var swiper = new Swiper('.favorite-product .swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: false,
        loopFillGroupWithBlank: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.2,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        }
    });

    var swiper = new Swiper('.score-today .swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loopFillGroupWithBlank: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.2,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            // when window width is >= 762px
            762: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        }
    });

    var swiper = new Swiper('.instrument-sets .swiper-container', {
        slidesPerView: 5,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.7,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 3,
                spaceBetween: 40
            },
            // when window width is >= 762px
            762: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            // when window width is >= 992px
            992: {
                slidesPerView: 5,
                spaceBetween: 25
            }
        }
    });

    var swiper = new Swiper('.related-products .swiper-container', {
        slidesPerView: 5,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.7,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 3,
                spaceBetween: 40
            },
            // when window width is >= 762px
            762: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            // when window width is >= 992px
            992: {
                slidesPerView: 5,
                spaceBetween: 25
            }
        }
    });

    $(document).ready(function () {
        $('.flipTimer').flipTimer({

// count up or countdown
            direction: 'down',

// the target <a href="https://www.jqueryscript.net/time-clock/">date</a>
            date: 'August 13, 2020 08:30:30',

        });
    });
</script>
</body>
</html>