<?php require_once 'db.inc.php' ?>
<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>付款頁面</title>
    <link rel="stylesheet" href="./CSS/payment.css">


    <!-- bootstrap 4 link -------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
    <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <!-- bootstrap 4 link -------------------------------->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://js.stripe.com/v2/"></script>
    <script src="./DatPayment-master/dist/js/DatPayment.js"></script>

    <!-- google font link ------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


    <!-- CSS link ---------------------------->
    <link rel="stylesheet" href="CSS/0.body.css">
    <link rel="stylesheet" href="CSS/1.header.css">
    <link rel="stylesheet" href="CSS/2.footer.css">
    <link rel="stylesheet" href="CSS/3.btn_to_top.css">

    <script src="./js/1.header.js"></script>
    <script src="./js/custom.js"></script>
</head>

<body>

    <!-- HD : Header (Navbar) ----------------------------------------------->

    <header>
        <nav class="navbar fixed-top hd_navbar">
            <!-- logo ------------------------>
            <a href="#" class="d-none d-lg-block">
                <div class="hd_logo">
                    <img src="./img/logo-png.png" alt="">
                </div>
            </a>
            <div>
            </div>
            <!-- nav-link d-none d-lg-block-------------------------->
            <div class="hd_nav-link">

                <!-- title-link ---------------------->
                <div class="hd_title">

                    <!-- 品牌專區 -->
                    <div class="hd_title_link t1">
                        <a href="#">品牌專區</a>
                    </div>

                    <!-- 商品分類 -->
                    <div class="hd_title_link t2">
                        <a href="#">商品分類</a>
                    </div>

                    <!-- 智慧專欄 -->
                    <div class="hd_title_link t3">
                        <a href="#">智慧專欄</a>
                    </div>

                    <!-- 窩的智慧 -->
                    <div class="hd_title_link t4">
                        <a href="#">窩的智慧</a>
                    </div>

                </div>

                <!-- icon-link --------------------->
                <div class="hd_icon">

                    <!-- 比較清單 -->
                    <div class="hd_icon_link i1">
                        <a href="#">
                            <!-- <img src="./img/icon_compare-list.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.51 37.51">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_2-2" data-name="圖層 2">
                                        <line class="cls-1" y1="17.85" x2="37.51" y2="17.85" />
                                        <line class="cls-1" x1="18.83" x2="18.83" y2="37.51" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <!-- 喜好清單 -->
                    <div class="hd_icon_link i2">
                        <a href="#">
                            <!-- <img src="./img/icon_saved.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.14 35.05">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_2-2" data-name="圖層 2">
                                        <path class="cls-1" d="M34,3.69c-4.13-4.13-10.83-3.25-15,.89-4.13-4.14-10.84-5-15-.89a10.59,10.59,0,0,0,0,15l15,15,15-15A10.57,10.57,0,0,0,34,3.69Z" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <!-- 購物車 -->
                    <div class="hd_icon_link i3">
                        <a href="#">
                            <!-- <img src="./img/icon_shopping-cart.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.28 39.27">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-linejoin: round;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_2-2" data-name="圖層 2">
                                        <path class="cls-1" d="M0,1H8.08A1.51,1.51,0,0,1,9.55,2.16L15.38,27a1.5,1.5,0,0,0,1.47,1.16h24A1.51,1.51,0,0,0,42.31,27L46.24,8.12A1.51,1.51,0,0,0,44.77,6.3H14.92" />
                                        <line class="cls-1" x1="24.81" y1="12.44" x2="41.63" y2="12.44" />
                                        <line class="cls-1" x1="21.04" y1="16.79" x2="41.63" y2="16.79" />
                                        <line class="cls-1" x1="31.35" y1="22.07" x2="41.57" y2="22.07" />
                                        <circle class="cls-1" cx="19.29" cy="35.18" r="3.1" />
                                        <circle class="cls-1" cx="38.6" cy="35.18" r="3.1" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <!-- 會員登入 / 註冊 -->
                    <div class="hd_icon_link i4">
                        <a href="#">
                            <!-- <img src="./img/icon_member.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.76 45.4">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_2-2" data-name="圖層 2">
                                        <circle class="cls-1" cx="21.38" cy="9.67" r="8.67" />
                                        <path class="cls-1" d="M1.06,44.4H41.7C40.12,16.83,2.63,16.83,1.06,44.4Z" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                </div>

                <!-- 會員登入 / 註冊狀態 ------------------------->
                <div class="hd_member_state">
                    <?php if (isset($_SESSION['user_name'])) { ?>
                        <?php echo $_SESSION['user_name'] ?>｜<a id="logout" class="btn btn-link">登出</a>
                    <?php } else { ?>
                        <a href="#">登入</a>｜<a href="#">註冊</a>
                    <?php } ?>
                </div>
            </div>

            <!-- mobile_nav d-lg-none------------------------------>
            <!-- 三明治選單 -->
            <div class="hd_icon_link d-lg-none btn_toggler">
                <img src="./img/icon_menu2_black_24dp.svg" alt="">
            </div>

            <!-- LOGO -->
            <a href="#" class="d-lg-none">
                <div class="hd_logo">
                    <img src="./img/logo-png.png" alt="">
                </div>
            </a>

            <!-- 購物車 -->
            <div class="hd_icon_link i4 d-lg-none">
                <a href="#"><img src="./img/icon_shopping-cart.svg" alt=""></a>
            </div>
        </nav>
    </header>

    <!-- 三明治選單 -------------------------------------->

    <div class="hd_toggler d-lg-none d-none">
        <div class="toggler_box">

            <!-- icon-link -->
            <div class="tog_icon_box">
                <!-- 註冊 / 登入 -->
                <a href="#"></a>
                <div class="tog_icon_link">
                    <img class="tog_icon" src="./img/icon_member.svg" alt="">
                    <?php if (isset($_SESSION['user_name'])) { ?>
                        <?php echo $_SESSION['user_name'] ?>｜<a id="logout" class="btn btn-link">登出</a>
                    <?php } else { ?>
                        <a href="#">登入</a>｜<a href="#">註冊</a>
                    <?php } ?>
                </div>
                </a>

                <!-- 喜好清單 -->
                <a href="#"></a>
                <div class="tog_icon_link">
                    <img class="tog_icon" src="./img/icon_saved.svg" alt="">
                    喜好清單
                </div>
                </a>

                <!-- 比較清單 -->
                <a href="#"></a>
                <div class="tog_icon_link">
                    <img class="tog_icon" src="./img/icon_compare-list.svg" alt="">
                    比較清單
                </div>
                </a>

            </div>

            <!-- title-link ---------------------->
            <div class="hd_title">

                <!-- 品牌專區 -->
                <div class="hd_title_link">
                    <a href="#">品牌專區</a>
                </div>

                <!-- 商品分類_level_0 -->
                <div class="hd_title_link tog_lv_0">
                    <a href="#">商品分類</a>
                </div>

                <!-- 商品分類細項_level_1 ---------------->
                <div class="tog_lv_1 d-none">

                    <!-- 廚房家電_level_2 -->
                    <div class="tog_lv_2 lv2-1">
                        <p>廚房家電</p>

                        <!-- 商品項目(含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-1">
                            <div class="tog_lv_4">
                                <a href="#">烹飪機器人</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">萬用鍋</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">智能烤箱/微波爐</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">冰箱</a>
                            </div>
                        </div>

                    </div>

                    <!-- 居家安全_level_2 -->
                    <div class="tog_lv_2 lv2-2">
                        <p>居家安全</p>

                        <!-- 商品項目(含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-2">
                            <div class="tog_lv_4">
                                <a href="#">智慧門鎖</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">網路攝影機</a>
                            </div>
                        </div>

                    </div>

                    <!-- 居家清潔_level_2 -->
                    <div class="tog_lv_2 lv2-3">
                        <p>居家清潔</p>

                        <!-- 商品項目(含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-3">
                            <div class="tog_lv_4">
                                <a href="#">掃地機器人</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">空氣清淨機</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">除濕機</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">冷氣</a>
                            </div>
                        </div>

                    </div>

                    <!-- 娛樂與教育_level_2 -->
                    <div class="tog_lv_2 lv2-4">
                        <p>娛樂與教育</p>

                        <!-- 商品項目(含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-4">
                            <div class="tog_lv_4">
                                <a href="#">管家機器人</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">陪伴機器人</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">電視</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">智慧音箱</a>
                            </div>
                        </div>
                    </div>

                    <!-- 智能周邊_level_2 -->
                    <div class="tog_lv_2 lv2-5">
                        <p>智能周邊</p>

                        <!-- 商品項目(含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-5">
                            <div class="tog_lv_4">
                                <a href="#">智能插座</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">智能燈泡</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">智能窗簾</a>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- 智慧專欄 -->
                <div class="hd_title_link">
                    <a href="#">智慧專欄</a>
                </div>

                <!-- 窩的智慧 -->
                <div class="hd_title_link">
                    <a href="#">窩的智慧</a>
                </div>

            </div>

        </div>

        <div class="toggler_box_right"></div>
    </div>



    <!-- 從這裡開始進行網頁撰寫 ------------------->
    <div class="wrap">

        <!-- ↓↓↓ 測試區域可刪 ↓↓↓ -->
        <div class="container">
            <h4>結帳</h4>

            <div class="a">
                <div class="circle circle2">

                </div>
                <div class="circle circle1">
                    <h6>選擇付款方式</h6>
                </div>
                <div class="circle circle3"></div>
            </div>

            <div class="option_method">
                <!-- php去跑 -->
                <div class="product_list">
                    <div class="product_info">
                        <img src="https://picsum.photos/100/100" alt="">
                        <div class="center">
                            <h5>陪你陪你好睡覺</h5>
                            <h6>數量： 5 件</h6>
                        </div>
                    </div>
                    <h4 class="right">NT$10,000</h4>
                </div>
                <!-- php去跑 -->
                <div class="product_list">
                    <div class="product_info">
                        <img src="https://picsum.photos/100/100" alt="">
                        <div class="center">
                            <h5>陪你陪你好睡覺</h5>
                            <h6>數量： 5 件</h6>
                        </div>
                    </div>
                    <h4 class="right">NT$10,000</h4>
                </div>

                <!-- 看要跑幾個 -->

                <!-- 接運送方式 -->
                <div class="info">
                    <h5>運送方式：郵局掛號 免運(購物車達NT$10,000)</h5>
                    <div class="logistics_info">
                        <h6>訂購人姓名：</h6>
                        <h6>訂購人聯絡電話：</h6>
                        <h6>送貨地址：</h6>
                        <h6>備注：</h6>

                    </div>
                    <div class="right">
                        <h5>商品總計：NT$ php</h5>
                        <h5>商品折扣：NT$ php</h5>
                        <h5>運費總計：NT$ php</h5>
                        <h4 class="right">NT$10,000</h4>
                    </div>

                </div>
            </div>


            <h5>請選擇付款方式</h5>
            <div class="select_tri">
                <select id="select_select">
                    <option value="0">請選擇</option>
                    <option value="1">信用卡付款</option>
                </select>
                <div class="tri"></div>
            </div>
            <div class="credit">
                <form action="/" method="POST" id="payment-form" class="datpayment-form">
                    <div class="dpf-title">
                        Payment by credit card
                        <div class="accepted-cards-logo"></div>
                    </div>
                    <div class="dpf-card-placeholder"></div>
                    <div class="dpf-input-container">
                        <div class="dpf-input-row">
                            <label class="dpf-input-label">Credit Card Number</label>
                            <div class="dpf-input-container with-icon">
                                <span class="dpf-input-icon"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                                <input type="text" class="dpf-input" size="20" data-type="number">
                            </div>
                        </div>
                        <div class="dpf-input-row">
                            <div class="dpf-input-column">
                                <input type="hidden" size="2" data-type="exp_month" placeholder="MM">
                                <input type="hidden" size="2" data-type="exp_year" placeholder="YY">
                                <label class="dpf-input-label">Expiration Date</label>
                                <div class="dpf-input-container">
                                    <input type="text" class="dpf-input" data-type="expiry">
                                </div>
                            </div>
                            <div class="dpf-input-column">
                                <label class="dpf-input-label">Code</label>
                                <div class="dpf-input-container">
                                    <input type="text" class="dpf-input" size="4" data-type="cvc">
                                </div>
                            </div>
                        </div>
                        <div class="dpf-input-row">
                            <label class="dpf-input-label">Full Name</label>
                            <div class="dpf-input-container">
                                <input type="text" size="4" class="dpf-input" data-type="name">
                            </div>
                        </div>
                        <button type="submit" class="dpf-submit">
                            <span class="btn-active-state">
                                Submit
                            </span>
                            <span class="btn-loading-state">
                                <i class="fa fa-refresh "></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>

            <div class="info">
                <h5>發票選項</h5>
                <p>發票一經開立後不可更改，請確定資訊是否填寫正確喔！</p>
                <div class="invoice">
                    <div class="invoice_type">

                        <h6>發票類型</h6>
                        <div class="select_tri">
                            <select class="bill_type ">
                                <option value="0">請選擇</option>
                                <option value="1">捐贈發票</option>
                                <option value="2">電子發票</option>
                            </select>

                            <div class="tri"></div>
                        </div>
                        <div class="select_tri">
                            <select class="bill_2"></select>
                            <div class="tri"></div>
                        </div>
                        <input type="text" class="bill_3">
                    </div>
                    <h6>統一編號：<input type="text"></h6>
                    <h6>發票抬頭：<input type="text"></h6>

                </div>

            </div>


            <div class="l_part">
                <button class="back">回到購物車</button>
                <button class="next">確認付款</button>
            </div>

        </div>

        <!-- ↑↑↑ 測試區域可刪 ↑↑↑ -->

    </div>

    <!-- 在這裡結束網頁撰寫 ----------------------->



    <!-- FT : Footer ----------------------------------------------->

    <footer class="footer d-flex">

        <!-- LOGO -------------------------------->
        <a class="ft_logo" href="#">
            <img src="img/logo-png.png" alt="">
        </a>

        <!-- ft_box_link ---------------------------->
        <div class="ft_box">

            <div class="d-flex ft_box_top">

                <!-- footer_link 品牌專區 -->
                <p class="col ft_tt">
                    <a href="#">品牌專區</a>
                </p>

                <!-- footer_link 商品分類 -->
                <p class="col ft_tt">
                    <a href="#">商品分類</a>
                </p>

                <!-- footer_link 智慧專欄 -->
                <p class="col ft_tt">
                    <a href="#">智慧專欄</a>
                </p>

                <!-- footer_link 聯絡客服 -->
                <p class="col ft_tt">
                    <a href="#">聯絡客服</a>
                </p>

                <!-- footer_link 會員資料 -->
                <p class="col ft_tt">
                    <a href="#">會員資料</a>
                </p>
            </div>

            <div class="ft_box_bot">
                © copy right by Tech it
            </div>

        </div>

        <!-- ft_mobile_copy_right -->
        <div class="ft_mb_copy_right d-lg-none">
            <p>© copy right by Tech it</p>
        </div>

    </footer>


    <!-- btn_toTop --------------------------------------------->

    <button class="btn_toTop btn">
        <p>TOP</p>
    </button>


    <!-- JQ ----------------------------------->
    <script>
        // btn_toTop ----------------------------------
        $(".btn_toTop").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });


        // PC : click & hover ----------------------------
        // mouseenter ------------------------------
        $('.t1').mouseenter(function() {
            console.log('navbar mouseenter');
            // pc
            $('.t1').css('border-bottom', '1px solid rgb(11, 141, 173)');
            $('.t1>a').css('color', 'rgb(11, 141, 173)')
        });

        $('.t2').mouseenter(function() {
            console.log('navbar mouseenter');
            // pc
            $('.t2').css('border-bottom', '1px solid rgb(11, 141, 173)');
            $('.t2>a').css('color', 'rgb(11, 141, 173)')
        });

        $('.t3').mouseenter(function() {
            console.log('navbar mouseenter');
            // pc
            $('.t3').css('border-bottom', '1px solid rgb(11, 141, 173)');
            $('.t3>a').css('color', 'rgb(11, 141, 173)')
        });

        $('.t4').mouseenter(function() {
            console.log('navbar mouseenter');
            // pc
            $('.t4').css('border-bottom', '1px solid rgb(11, 141, 173)');
            $('.t4>a').css('color', 'rgb(11, 141, 173)')
        });


        // mouseleave --------------------------------
        $('.t1').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t1').css('border-bottom', '1px solid #707070');
            $('.t1>a').css('color', 'black')
        });

        $('.t2').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t2').css('border-bottom', '1px solid #707070');
            $('.t2>a').css('color', 'black')
        });

        $('.t3').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t3').css('border-bottom', '1px solid #707070');
            $('.t3>a').css('color', 'black')
        });

        $('.t4').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t4').css('border-bottom', '1px solid #707070');
            $('.t4>a').css('color', 'black')
        });


        // toggler 下拉選單 ---------------------------------

        // open/close toggler
        $('.btn_toggler').click(function() {
            console.log('btn_toggler click');
            $('.hd_toggler').removeClass('d-none');
        });

        $('.toggler_box_right').click(function() {
            console.log('.toggler_box_right click');
            $('.hd_toggler').addClass('d-none');
        });

        // tog_lv_0 商品分類
        $('.tog_lv_0').click(function() {
            console.log('商品分類 click');
            if ($('.tog_lv_1').hasClass('d-none')) {
                $('.tog_lv_1').removeClass('d-none');
            } else {
                $('.tog_lv_1').addClass('d-none');
            }

            // 清除項目點選效果
            $('.lv3-1,.lv3-2,.lv3-3,.lv3-4,.lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
            // $('.tog_lv_0').css('color', 'white').css('background-color', 'wheat');
        });

        // tog_lv_2
        // tog_lv2-1 廚房家電
        $('.lv2-1').click(function() {
            console.log('廚房家電 click');
            if ($('.lv3-1').hasClass('d-none')) {
                $('.lv3-1').removeClass('d-none');
                $('.lv2-1>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-1').addClass('d-none');
            }

            // 清除項目點選效果
            $('.lv3-2, .lv3-3, .lv3-4, .lv3-5').addClass('d-none');
            $('.lv2-2>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-2, .lv2-3, .lv2-4, .lv2-5').click(function() {
            console.log('關閉廚房家電 click');
            $('.lv3-1').addClass('d-none');
            $('.lv2-1>p').css('color', '#5a5a5a');
        });

        // tog_lv2-2 居家安全
        $('.lv2-2').click(function() {
            console.log('居家安全 click');
            if ($('.lv3-2').hasClass('d-none')) {
                $('.lv3-2').removeClass('d-none');
                $('.lv2-2>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-2').addClass('d-none');
            }

            // 清除項目點選效果
            $('.lv3-1, .lv3-3, .lv3-4, .lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-3, .lv2-4, .lv2-5').click(function() {
            console.log('關閉居家安全 click');
            $('.lv3-2').addClass('d-none');
            $('.lv2-2>p').css('color', '#5a5a5a');
        });

        // tog_lv2-3 居家清潔
        $('.lv2-3').click(function() {
            console.log('居家安全 click');
            if ($('.lv3-3').hasClass('d-none')) {
                $('.lv3-3').removeClass('d-none');
                $('.lv2-3>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-3').addClass('d-none');
            }

            // 清除項目點選效果
            $('.lv3-1, .lv3-2, .lv3-4, .lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-2, .lv2-4, .lv2-5').click(function() {
            console.log('關閉居家清潔 click');
            $('.lv3-3').addClass('d-none');
            $('.lv2-3>p').css('color', '#5a5a5a');
        });

        // tog_lv2-4 娛樂與教育
        $('.lv2-4').click(function() {
            console.log('居家安全 click');
            if ($('.lv3-4').hasClass('d-none')) {
                $('.lv3-4').removeClass('d-none');
                $('.lv2-4>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-4').addClass('d-none');
            }

            // 清除項目點選效果
            $('.lv3-1, .lv3-2, .lv3-3, .lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-2, .lv2-3, .lv2-5').click(function() {
            console.log('關閉娛樂與教育 click');
            $('.lv3-4').addClass('d-none');
            $('.lv2-4>p').css('color', '#5a5a5a');
        });

        // tog_lv2-5 智能周邊
        $('.lv2-5').click(function() {
            console.log('居家安全 click');
            if ($('.lv3-5').hasClass('d-none')) {
                $('.lv3-5').removeClass('d-none');
                $('.lv2-5>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-5').addClass('d-none');
            }

            // 清除項目點選效果
            $('.lv3-1, .lv3-2, .lv3-3, .lv3-4').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-4>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-2, .lv2-3, .lv2-4').click(function() {
            console.log('智能周邊 click');
            $('.lv3-5').addClass('d-none');
            $('.lv2-5>p').css('color', '#5a5a5a');
        });

        // this
        $('#select_select').change(function() {
            if ($(this).val() == 1) {
                $('.credit').show();
                console.log(1)

            } else {
                $('.credit').hide();
                console.log(2)
            }
        });
        $('.bill_type').change(function() {
            $('.bill_3').val('');
            if ($(this).val() == 1) {
                var o1 = `<option value="0">浪浪之家（85314880）</option>
               <option value="1">11111（85314880）</option>
               <option value="2">2222（85314880）</option>
               <option value="3">3333（85314880）</option>
               <option value="4">浪4之家（85314880）</option>`;
                $('.bill_2').html(o1).show();
                $('.bill_3').hide();
            } else if ($(this).val() == 0) {
                $('.bill_2').html('').hide();
                $('.bill_3').hide();
            } else {
                $('.bill_2').html('').hide();
                $('.bill_3').show();
            }
        })
        var payment_form = new DatPayment({
            form_selector: '#payment-form',
            card_container_selector: '.dpf-card-placeholder',

            number_selector: '.dpf-input[data-type="number"]',
            date_selector: '.dpf-input[data-type="expiry"]',
            cvc_selector: '.dpf-input[data-type="cvc"]',
            name_selector: '.dpf-input[data-type="name"]',

            submit_button_selector: '.dpf-submit',

            placeholders: {
                number: '•••• •••• •••• ••••',
                expiry: '••/••',
                cvc: '•••',
                name: 'SOPHIA'
            },

            validators: {
                number: function(number) {
                    return Stripe.card.validateCardNumber(number);
                },
                expiry: function(expiry) {
                    var expiry = expiry.split(' / ');
                    return Stripe.card.validateExpiry(expiry[0] || 0, expiry[1] || 0);
                },
                cvc: function(cvc) {
                    return Stripe.card.validateCVC(cvc);
                },
                name: function(value) {
                    return value.length > 0;
                }
            }
        });

        var demo_log_div = document.getElementById("demo-log");

        payment_form.form.addEventListener('payment_form:submit', function(e) {
            var form_data = e.detail;
            payment_form.unlockForm();
            demo_log_div.innerHTML += "<br>" + JSON.stringify(form_data);
        });

        payment_form.form.addEventListener('payment_form:field_validation_success', function(e) {
            var input = e.detail;

            demo_log_div.innerHTML += "<br>field_validation_success:" + input.getAttribute("data-type");

        });

        payment_form.form.addEventListener('payment_form:field_validation_failed', function(e) {
            var input = e.detail;

            demo_log_div.innerHTML += "<br>field_validation_failed:" + input.getAttribute("data-type");
        });

        // NUMBER              BRAND
        // _____________________________________

        // 4242424242424242	Visa
        // 5555555555554444	Mastercard
        // 378282246310005     American Express
        // 6011111111111117	Discover
    </script>

</body>

</html>