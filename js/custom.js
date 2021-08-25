$(function () {
    let input_email = $('input#email');
    let input_user_name = $('input#user_name');
    let input_birthday = $('input#birthday');
    let input_pwd = $('input#pwd');
    let input_check = $('input#check_pwd');
    let input_phone_number = $('input#phone_number');

    count_total();

    $("input#birthday").datepicker({
        dateFormat: 'yy-mm-dd',
        defaultDate: '1999-02-02',
        changeMonth: true,
        changeYear: true
    });
    // $("input#birthday").datepicker( "setDate" , "2019-01-01" );

    $('input[type="checkbox"]').click(function () {
        if ($(this).prop("checked")) {
            $(this).css("background-color", "#FA8873")
        } else {
            $(this).css("background-color", "#ffffff")

        }
    })


    $('input#btn_signup').click(function (event) {
        event.preventDefault();

        let re = /\S+@\S+(\.\S+)+/;
        let re1 = /09[0-9]{8}/;
        let pwd = $('#pwd').val();
        if (pwd != $('#check_pwd').val()) {
            //兩次密碼不一樣的時候
            console.log(1);
            input_pwd.addClass("border border-danger border-2")
            input_check.addClass("border border-danger border-2")
            .tooltip({
                title: '兩次密碼不相符',
                placement: 'top'
            })
        } else if (!re.test(input_email.val())) {
            //兩次密碼一樣 接著檢查email 不正確
            console.log(input_email.val());
            input_pwd.removeClass("border border-danger border-2");
            input_check.removeClass("border border-danger border-2")
            input_email
                .addClass("border border-danger border-5")
                .tooltip({
                    title: '請填寫完整的 E-mail',
                    placement: 'top'
                })
                .tooltip('show');
        } else if (!re1.test(input_phone_number.val())) {
            //兩次密碼一樣 | email 正確 | 手機號碼不正確
            console.log(3);
            input_email.removeClass("border border-danger border-5")
                .tooltip()
                .tooltip('dispose');

            input_phone_number.addClass("border border-danger border-5")
                .tooltip({
                    title: '請填寫正確手機號碼',
                    placement: 'top'
                })
                .tooltip('show');
        }
        else {
            //全部檢查都正確
            input_phone_number.removeClass("border border-danger border-5")
                .tooltip()
                .tooltip('dispose');
                
            let objUser = {
                email: input_email.val(),
                pwd: input_pwd.val(),
                user_name: input_user_name.val(),
                birthday: input_birthday.val(),
                phone_number: input_phone_number.val(),
                photo_sticker: $('.upload_img').attr('src')
            };
            // $('#registered_form').submit();
            $.post('insertUser.php', objUser, function (obj) {
                console.log(obj)
                if (obj.success) {
                    alert('歡迎加入TECH IT');
                    location.href = 'success_signup.php';
                } else {
                    console.log(1)
                    alert(obj.info);
                }

            }, 'json');
        }
    });
    
    //登入
    $('button#btn_login').click(function (event) {
        //避免元素的預設事件被觸發
        event.preventDefault();

        //各自將 input 帶入變數中
        let input_email = $('input#email_login');
        let input_pwd = $('input#pwd_login');

        //檢查 email 是否輸入
        if (input_email.val() == '') {
            alert('請輸入 E-mail');
            return false;
        }

        //檢查 密碼 是否輸入
        if (input_pwd.val() == '') {
            alert('請輸入密碼');
            return false;
        }

        //送出 post 請求，註冊帳號
        let objUser = {
            email_login: input_email.val(),
            pwd_login: input_pwd.val()
        };
        $.post("login1.php", objUser, function (obj) {
            if (obj['success']) {
                
                //成功訊息
                alert('登入成功');

                location.href = "follow.php";
            } else {
                alert(`${obj['info']}`);
            }
        }, 'json')
    });

    //登出
    $('a#logout').click(function (event) {
        //避免元素的預設事件被觸發
        event.preventDefault();
        console.log(1)
        $.get('logout.php', function (obj) {
            if (obj['success']) {
                alert('登出成功');

                setTimeout(function () {
                    location.href = 'login_index.php';
                }, 1000);
            }
            console.log(obj);
        }, 'json');
    });

    //忘記密碼
    $('button#btn_forgot').click(function (event) {
        //避免元素的預設事件被觸發
        event.preventDefault();

        //各自將 input 帶入變數中
        let input_email = $('input#email_login');

        //檢查 email 是否輸入
        if (input_email.val() == '') {
            alert('請輸入 E-mail');
            return false;
        }

        // $('#forgot_form').submit();
 
        //送出 post 請求，註冊帳號
        let objUser = {
            email_login: input_email.val()
        };
        $.post("check.php", objUser, function (obj) {
            if (obj['success']) {
                //成功訊息 
                alert('驗證信已寄出');

                // setTimeout(function () {
                    location.href = 'login.php';
                // }, 1000);

            } else {
                alert(`${obj['info']}`);
            }
            console.log(obj);
        }, 'json')
    });
// 更改密碼
    $('#pwd_change').click(function(event){
        event.preventDefault();
        if ($('#pwd_again').val() != $('#pwd_again2').val()) {
          
            console.log(1)
            $('#pwd_again').addClass("border border-danger border-2")
            $('#pwd_again2').addClass("border border-danger border-2")
            .tooltip({
                title: '兩次密碼不相符',
                placement: 'top'
            })
        } else{
            console.log(2)
            $('#pwd_again2').removeClass("border border-danger border-5")
            .tooltip()
            .tooltip('dispose');

            var email_str = location.search.split('&')[0].split('=')[1];
            var ver = location.search.split('&')['1'].split('=')[1];

        let objUserReset = {
            pwd: $('#pwd_again').val(),
            email:email_str,
            verified_code:ver
        };
       
        $.post('pwd_reset.php', objUserReset, function (obj) {
            console.log(obj)
            if (obj.success) {
                alert('SUCCESS');
                location.href = 'success_signup.php';
            } else {
                alert(obj.info);
            }

        }, 'json');

        }
       
    })

    //計算數量+
    $('button.btn_plus').click(function () {
        let nowCount = Number($(this).parents('.list').find('.item_price').val());
        $(this).parents('.list').find('.item_price').val(Number(nowCount)+1);
        count_total();
    });

    //計算數量-
    $('button.btn_minus').click(function (event) {
        let nowCount = Number($(this).parents('.list').find('.item_price').val());
        if(nowCount > 0){
            nowCount--;
        }
        $(this).parents('.list').find('.item_price').val(nowCount);
        count_total();
    });

    //計算總計
    function count_total(){
        let total = 0;
        let item_total = 0;
        $('.list').each(function(){
            item_total =  Number($(this).find('.single_price').text().replace('NT$',''))*Number($(this).find('.item_price').val());
            total +=item_total;
        });
        $('.total').text(`NT$ ${total}`);
    }
    
        
  
    //follow加購物車
     $('.follow_shopping_cart').click(function(event){
        let btn = $(this);
        var prod_name = $(this).parents('.card1').find('.card_title').text();
        // var brand_id = $(this).parents('.card1').find('.brand_id').text();
        var prod_thumbnail = $(this).parents('.card1').find('.prod_thumbnail').attr('src');
        var prod_price = $(this).parents('.card1').find('.price').text();
        var brand_id = $(this).data('brand_id');
        
        //送出 post 請求，加入購物車
        let objProduct = {
            brand_id: brand_id,
            prod_name: prod_name,
            prod_thumbnail: prod_thumbnail,
            prod_price: prod_price,
            prod_qty:'1'      
        };
        console.log(objProduct);
        // $('#aa').submit();
        $.post("ShoppingCart.php", objProduct, function (obj) {
            if (obj['success']) {
                //成功訊息
                alert('加入購物車成功');

                //將網頁上的購物車商品數量更新
                $('span#count_products').text(obj['count_products']);
            }else{
                console.log(obj);
            }
            
        }, 'json');
    });


    
     $('.del').click(function (event) {
        //避免元素的預設事件被觸發
        event.preventDefault();

        //取得選定刪除的購物車索引
        let index = $(this).attr('data-index');

        $.get("delete.php", { index: index }, function (obj) {
            if (obj['success']) {
                location.reload();
            } else {
                alert(`${obj['info']}`);
            }
            console.log(obj);
        }, 'json');
    });

    //加入商品至購物車/喜好清單/比較列表

//加入商品至購物車
$('button.joincart').click(function(){
    //取得 button 的 jQuery 物件
    let btn = $(this);

    //送出 post 請求，加入購物車
    let objProduct = {
        brand_id: btn.attr('data-brand_id'),
        prod_id: btn.attr('data-prod-id'),
        prod_name: btn.attr('data-prod-name'),
        prod_thumbnail: btn.attr('data-prod-thumbnail'),
        prod_price: btn.attr('data-prod-price'),
        prod_qty:'1' 
    };
    console.log(objProduct);
    $.post("ShoppingCart.php", objProduct, function(obj){
        if(obj['success']){
            //成功訊息
            alert('加入購物車成功');
        }
        console.log(obj);
    }, 'json');

    
});

//加入喜好清單
$('button.saved').click(function(event){
    //避免元素的預設事件被觸發
    event.preventDefault();

    //取得 button 的 jQuery 物件
    let btn = $(this);

    //送出 post 請求，加入購物車
    let objProduct = {
        prod_id: btn.attr('data-prod-id'),
    };
    $.post("follow.php", objProduct, function(obj){
        if(obj['success']){
            //成功訊息
            alert('商品追蹤成功');
        } else {
            alert(`${obj['info']}`);
        }
        console.log(obj);
    }, 'json');
});


//加入比較列表
     $('button.compare').click(function(event){
        //取得 button 的 jQuery 物件
        let btn = $(this);

        //送出 post 請求，加入購物車
        let objProduct = {
            prod_id: btn.attr('data-prod-id'),
            prod_name: btn.attr('data-prod-name'),
            prod_thumbnail: btn.attr('data-prod-thumbnail'),
            prod_price: btn.attr('data-prod-price'),
        };

        $.post("compare.php", objProduct, function(obj){
            if(obj['success']){
                //成功訊息
                alert('加入比較列表成功');
            }
            console.log(obj);
        }, 'json');

    
    });

    //點擊購物車內的品牌
    // $('.brand_check').click(function(){
    //     $('.list').hide();
    //     $(`.list[data-brand_id=${$(this).val()}]`).show();
    // });

});




