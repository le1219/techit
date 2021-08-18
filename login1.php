<?php
session_start();

// 匯入 SQL 檔案名
require_once 'db.inc.php';

//預設
$obj['success'] = false;
$obj['info'] = '登入失敗';

//表單是不是完整
if (
    isset($_POST['email'])
    && isset($_POST['pwd'])
)
{   
    //密碼加密
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $pwd = sha1($_POST['pwd']);
    try{
        //加使用者
        $sql =  "SELECT `email`,`user_name`
                FROM `users`
                WHERE `email` = '{$email}'
                AND `pwd` = $pwd";
        
        // "INSERT INTO `users` 
        // (`email`, `pwd`, `user_name`,
        // `phone_number`, `birthday`,`created_at`, `updated_at`)
        // VALUES (
        //     '$email', '$pwd', '$user_name', 
        //     '$phone_number', '$birthday', 
        //     current_timestamp(), current_timestamp());";
        $stmt = $pdo->query($sql);
        // $stmt->execute($input);


        // $sql = "INSERT INTO `users` (`email`, `pwd` , `user_name` ,`birthday` , `phone_number`) 
        //     VALUES (

        //         '{$_POST['email']}',
        //         '{$pwd}',
        //         '{$_POST['user_name']}',
        //         '{$_POST['birthday']}',
        //         '{$_POST['phone_number']}',
        //     )";

        //     $stmt = $pdo->query($sql);


            if($stmt->rowCount() > 0){
                $obj['success'] = true;
                $obj['info'] = '登入成功';

                $objUser = $stmt->fetch();

                //session
                $_SESSION['email'] = $objUser['email'];
                $_SESSION['user_name'] = $objUser['user_name'];
            }
        }catch(PODException $e){
            switch($pdo->errorInfo()[1]){
                case 1062:
                    $obj['info'] = '此賬號已注冊';
                break;
                case 1064:
                    $obj['info'] = 'wrong sql';
                break;
            }
    }
}
header('Content-Type:application/json');

// output json
echo json_encode($obj,JSON_UNESCAPED_UNICODE);