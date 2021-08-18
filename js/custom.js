$(function () {
    let input_email = $('input#email');
    let input_user_name = $('input#user_name');
    let input_birthday = $('input#birthday');
    let input_pwd = $('input#pwd');
    let input_check = $('input#check_pwd');
    let input_phone_number = $('input#phone_number');

    $("input#birthday").datepicker({
        dateFormat: 'yy-mm-dd',
        defaultDate: '1999-02-02'
    });
    // $("input#birthday").datepicker( "setDate" , "2019-01-01" );

    $("input,checkbox").click(function () {
        if ($(this).prop("checked")) {
            $(this).css("background-color", "#FA8873")
        } else {
            $(this).css("background-color", "#ffffff")

        }
    })


    $('button#btn_signup').click(function (event) {
        event.preventDefault();

        let re = /\S+@\S+(\.\S+)+/;
        let re1 = /09[0-9]{8}/;
        let pwd = $('#pwd').val();

        if (pwd != $('#check_pwd').val()) {
            //兩次密碼不一樣的時候
            console.log(1);
            input_pwd.addClass("border border-danger border-2")
            input_check.addClass("border border-danger border-2")
        } else if (!re.test(input_email.val())) {
            //兩次密碼一樣 接著檢查email 不正確
            console.log(input_email.val());
            input_pwd.removeClass("border border-danger border-2");
            input_check.removeClass("border border-danger border-2")

            input_email
                .addClass("border border-danger border-5")
                .tooltip({
                    title: '請填寫完整的 E-mail',
                    placement: 'right'
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
                    placement: 'right'
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
                phone_number: input_phone_number.val()
            };
            // $('#registered_form').submit();
            $.post('insertUser.php', objUser, function (obj) {
                console.log(obj)
                if (obj.success) {
                    alert('SUCCESS');
                    location.href = 'success_signup.php';
                } else {
                    alert(obj.info);
                }

            }, 'json');
        }
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
                    location.href = 'index.php';
                }, 1000);
            }
            console.log(obj);
        }, 'json');
    });


});




