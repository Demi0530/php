<?php

    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {    // 檢查是否已登入
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){   // 更新指定使用者的密碼
            echo "修改錯誤";     // 修改失敗
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";     // 返回使用者管理頁面
        }else{
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }

?>
