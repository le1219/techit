<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<!-- <php session_destroy()  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>願望清單</title>
    <link rel="stylesheet" href="./Css/follow.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">




    <!-- bootstrap 4 link -------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
    <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <!-- bootstrap 4 link -------------------------------->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="./jS/custom.js"></script>

    <!-- jquery link -------------------------------------->



    <!-- google font link ------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


    <!-- CSS link ---------------------------->
    <link rel="stylesheet" href="CSS/0.body.css">
    <link rel="stylesheet" href="CSS/1.header.css">
    <link rel="stylesheet" href="CSS/2.footer.css">
    <link rel="stylesheet" href="CSS/3.btn_to_top.css">


    <!-- JS link ----------------------------------->
    <script src="./js/1.header.js"></script>
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
                        <a href="shopping_cart.php">
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
                        <?php echo $_SESSION['user_name'] ?>｜<a href="./logout.php" id="logout" class="btn btn-link">登出</a>
                    <?php } else { ?>
                        <a href="./login.php">登入</a>｜<a href="./signup.php">註冊</a>
                    <?php } ?>
                </div>
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
                        <?php echo $_SESSION['user_name'] ?>｜<a href="./logout.php" id="logout" class="btn btn-link">登出</a>
                    <?php } else { ?>
                        <a href="./login.php">登入</a>｜<a href="./signup.php">註冊</a>
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
    <!-- WP : wrap -->
    <div class="wrap">
        <div class="r_part">
            <div class="main_head">
                <h3>商品種類</h3>
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php
                            $sql = "SELECT `brands`.`brand_name`,`brands`.`brand_id`,`products`.`prod_id` FROM `products` INNER JOIN `users_follow` ON `products`.`prod_id`=`users_follow`.`prod_id` INNER JOIN `brands` ON `products`.`brand_id`=`brands`.`brand_id`
                            GROUP BY `products`.`brand_id`;";
                            $stmt = $pdo->query($sql);
                            if ($stmt->rowCount() > 0) {
                                $arr = $stmt->fetchAll();
                                foreach ($arr as $obj) {
                            ?>
                                    <li class="splide__slide"><a href="follow.php?brand_id=<?= $obj['brand_id'] ?>"><?= $obj['brand_name'] ?></a></li>
                            <?php
                                }
                            } ?>

                            <!-- $sql = "SELECT `brand_id` FROM `users_follow`";
                            $arr = $pdo->query($sql)->fetchAll();
                            foreach ($arr as $obj) {
                                echo "<li class=\"splide__slide\">{$obj['brand_id']}</li>";
                            } -->


                        </ul>
                    </div>
                </div>
            </div>
            <div class="main">
                <?php
                if (isset($_GET['brand_id'])) {
                    $sql = "SELECT * 
                        FROM `brands`
                        WHERE `brand_id`={$_GET['brand_id']}";

                    $stmt = $pdo->query($sql);
                    if ($stmt->rowCount() > 0) {
                        $arr = $stmt->fetchAll();
                        foreach ($arr as $obj) {

                ?>
                            <h4><?= $obj['brand_name'] ?></h4>

                <?php
                        }
                    }
                }
                ?>
                <div class="row">
                    <?php

                    $sql = "SELECT *  FROM `products` INNER JOIN `users_follow` ON `products`.`prod_id`=`users_follow`.`prod_id` INNER JOIN `brands` ON `products`.`brand_id`=`brands`.`brand_id`";

                    if (isset($_GET['brand_id'])) $sql .= "WHERE `products`.`brand_id`={$_GET['brand_id']} ";


                    $stmt = $pdo->query($sql);
                    if ($stmt->rowCount() > 0) {
                        $arr = $stmt->fetchAll();
                        foreach ($arr as $obj) {
                    ?>
                            <div class="col-4">

                                <div class="card1 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="149.945" height="36" viewBox="0 0 149.945 36">
                                        <g id="Group_650" data-name="Group 650" transform="translate(-364.442 -1080)">
                                            <g id="Group_275" data-name="Group 275">
                                                <path id="Subtraction_1" data-name="Subtraction 1" d="M-6172.056,39H-6322V3h149.943L-6190.4,21l18.338,18Z" transform="translate(6686.442 1077)" fill="#8b82b2" opacity="0.561" />
                                                <text id="免運優惠" transform="translate(377.442 1103.857)" fill="#fff" font-size="16" font-family="PingFangHK-Regular, PingFang HK" letter-spacing="0.2em">
                                                    <tspan x="0" y="0">免運優惠</tspan>
                                                </text>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="card_head">
                                        <h5 class="card_title"><?= $obj['prod_name'] ?>
                                        </h5>

                                        <div class="pic_area"> <img src="img/去背產品圖/<?= $obj['prod_thumbnail'] ?>" class="prod_thumbnail"></div>

                                        <div class="price">NT$ <?= $obj['prod_price'] ?></div>
                                    </div>
                                    <div class="card_footer">
                                        <button class="del"><img src="./img/icon_trash.svg" alt="">移出喜愛清單</button>
                                        <button class="follow_shopping_cart"><img src="./img/icon_shopping-cart.svg" alt="">加入購物車</button>
                                    </div>
                                </div>

                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>

            </div>

        </div>

        <div class="full">
            <div class="del_alert">
                <h5>是否取消商品？</h5>
                <div class="flex">
                    <button class="ans_f">否</button>
                    <button class="ans_y">確定</button>
                </div>
            </div>
        </div>
    </div>

    <div class="moblie_part">

        <!-- <div class="moblie">
            <div class="head">
                <h6 class="mb-0">所有商品</h6>
                <button class="m_button">篩選</button>
            </div>
            <div class="s_select">
                <h6 class="">分類</h6>
                <div>
                    <label for="c1"> <input type="checkbox" name="product_name">品牌名字(A→Z)</label>
                </div>
                <div>
                    <label for="c1"><input type="checkbox" name="product_name"> 家電類別(A→Z)</label>
                </div>
                <div>
                    <label for="c1"> <input type="checkbox" name="product_name">優惠活動(新→舊)</label>
                </div>
                <div>
                    <label for="c1"><input type="checkbox" name="product_name">優惠活動(舊→新)</label>
                </div>
                <h6 class="">排序</h6>
                <div>
                    <label for="c1"><input type="checkbox" name="product_name">金額(大→小)</label>
                </div>
                <div>
                    <label for="c1"> <input type="checkbox" name="product_name">金額(小→大)</label>
                </div>
                <div>
                    <label for="c1"><input type="checkbox" name="product_name">上架時間(新→舊)</label>
                </div>
                <div>
                    <label for="c1"><input type="checkbox" name="product_name">上架時間(舊→新)</label>
                </div>
                <div>
                    <label for="c1"><input type="checkbox" name="product_name">加入時間(新→舊)</label>
                </div>
                <div>
                    <label for="c1"><input type="checkbox" name="product_name">加入時間(舊→新)</label>
                </div>
                <h6 class="">篩選</h6>
                <div>
                    <label for="c1"><input type="checkbox" name="product_name" checked="true">只顯示折扣商品</label>
                </div>
                <div>
                    <label for="c1">
                        <input type="checkbox" name="product_name">
                        可快速到貨
                    </label>
                </div>
            </div>
        </div> -->
        <div class="m_body">

            <?php
            $sql = "SELECT `prod_id`, `prod_name`,`prod_thumbnail`,`prod_price`
                         FROM `users_follow`;";
            $stmt = $pdo->query($sql);
            if ($stmt->rowCount() > 0) {
                $arr = $stmt->fetchAll();
                foreach ($arr as $obj) {
            ?>
                    <div class="m_card">
                        <div class="m_card_head ">
                            <h6 class="card_title mb-0"><?= $obj['prod_name'] ?></h6>
                            <img class="del" src="./LOGO_ICON/垃圾桶.svg" alt="">
                        </div>
                        <div class="card_center">

                            <div class="pic_area"> <img src="img/去背產品圖/<?= $obj['prod_thumbnail'] ?>" class="prod_thumbnail"></div>

                            <div class="r_rpart">
                                <button class="del"><img src="./img/icon_trash.svg" alt="">移出喜愛清單</button>
                                <div class="m_rpart">
                                    <div class="m_price mb-3">NT$ <?= $obj['prod_price'] ?></div>
                                    <button class="follow_shopping_cart"><img src="./img/icon_shopping-cart.svg" alt="">加入購物車</button>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            }

            ?>
        </div>

    </div>

    </div>

    </div>


    <form id="aa" method="POST" action="ShoppingCart.php">
        <input type="hidden" name="prod_name" value="1">
        <input type="hidden" name="prod_thumbnail" value="1">
        <input type="hidden" name="prod_price" value="1">
    </form>






    </div>
    <div class="full">
        <div class="del_alert">
            <h5>是否取消商品？</h5>
            <div class="flex">
                <button class="ans_f">否</button>
                <button class="ans_y">確定</button>
            </div>
        </div>
    </div>
    </div>

    </div>
    <!-- 在這裡結束網頁撰寫 ----------------------->



    <!-- FT : Footer ----------------------------------------------->

    <!-- <footer class="footer">

        <div class="row ft-box">

            <div class="col-3 ft-title">
                <h5>footer title</h5>
            </div>

            <div class="col-3 ft-title">
                <h5>footer title</h5>
            </div>

            <div class="col-3 ft-title">
                <h5>footer title</h5>
            </div>

            <div class="col-3 ft-title">
                <h5>footer title</h5>
            </div>

        </div>

    </footer> -->


    <!-- btn_toTop --------------------------------------------->
    <!-- <button class="btn_toTop btn btn-primary">TOP</button> -->


    <!-- JQ : btn_toTop ----------------------------------->


    <script>
        $(".btn_toTop").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
        // slide
        $(function() {
            $('.left').click(function() {
                let nowX = $('ul').css('margin-left');
                nowX = Number(nowX.split('px')[0]);
                if (nowX >= -216) {
                    $('ul').animate({
                        marginLeft: `${(nowX * 100 - 72 * 100) / 100}px`
                    });
                }
            });

            $('.right').click(function() {
                let nowX = $('ul').css('margin-left');
                nowX = Number(nowX.split('px')[0]);
                if (nowX <= -72) {
                    $('ul').animate({
                        marginLeft: `${(nowX * 100 + 72 * 100) / 100}px`
                    });
                }
            });

            var splide = new Splide('.splide', {
                type: 'loop',
                width: '500px',
                height: '30px',
                focus: 'center',
                perPage: 3,
                pagination: false
            }).mount();
            $('li.is-active').addClass('active-menu');

            splide.on('moved', function() {
                $('li').removeClass('active-menu');
                $('li.is-active').addClass('active-menu');
            });

            $('.del').click(function() {
                $('.full').show();
            })

            $('.ans_f').click(function() {
                $('.full').css('display', 'none');
            })
            $('.ans_y').click(function() {
                $('.full').css('display', 'none');
            })
        });
        // 



        // mobile
        $("input,checkbox").click(function() {
            if ($(this).prop("checked")) {
                $(this).css("background-color", "#FA8873")
            } else {
                $(this).css("background-color", "#ffffff")

            }

        })
        $(".m_button").click(function() {
            if ($('.s_select').css("display") == 'none') {
                $(".s_select").show();
                console.log(1)
            } else {
                $(".s_select").hide();
                console.log(3)
            }
        })

        // var item_arr =

        // for(let i=0;i>=item_arr;i++){
        // $('.price').val(item_arr[i].price)
        // }
    </script>
</body>

</html>