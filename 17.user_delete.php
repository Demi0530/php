<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {    // 檢查使用者是否已登入
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");   // 連接資料庫
        $sql="delete from user where id='{$_GET["id"]}'";      // 刪除指定使用者
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";     // 返回管理頁面
    }
?>
