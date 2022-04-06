<?php
    session_start();
    $link = @mysqli_connect(
    '', //mySql主機名稱
    'test',      //使用者名稱
    '123',          //密碼
    'user');    
?>
<?php

    if(isset($_COOKIE["account"])){
        $cookieID=$_COOKIE["account"];
        echo "歡迎".$cookieID."再度光臨";
    }else{
        echo "恭喜您發現本網站!!!"; 
    }
?>
<html>
    <head><!-- 把機器讀取內容放head -->
        <link href="css/member.css" rel="stylesheet"><!-- 透過css對網頁進行美化 -->
        <link href="/img/icon.jpg" rel="icon">
        <title>登入</title>
        <meta http-equiv="Content-Language" content="zh-TW">
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8">
        <meta name="keywords" content="墾丁,墾丁三日,kanding,travel,travel taiwan">
        <meta name="description" content="會員登入">
        <meta name="author" content="FatBoy001">
        <meta name="distribution" content="Taiwan">
    </head>
    <body>
       
        <div class="contain"><h1>
            <font color="White">
                <?php
                    echo "<body bgcolor='#FAE8E0'>";
                ?>
                <center><spam style="color:White;border: 2px white dashed;font-size:72px;">登入</spam></center>
                <hr color="white">
                <center>
                    <table style="color:white; font-size:30px;" bordercolor="white">
                        <form action="/Nuk-Web-Pages-Programming-Week5/index.php" method="post" enctype="multipart/form-data"><!--get會把全部變數與訊息顯示出來在url-->
                        
                            <tr>
                                <th>帳號:</th><th><input type="text" name="account"></th>
                            </tr>
                            <tr>
                                <th>密碼:</th><td><input type="password" name="pwd"></td>
                            </tr>
                            <tr>
                                <th></th><th><input type="submit" value="登入" style="width:100%;"></th>
                            </tr>
                        </form>
                        <tr>
                            <th></th><th><a href="register.php"><button style="width:100%;">註冊</button></a></th>
                        </tr>
                    </table>
                    
                   
                </center>               
                <hr color="white">
            </font>
            </br>
            <?php
                
                if(isset($_POST["account"])){
                    if($_POST["account"]!=null){
                        $uId=$_POST["account"];
                        $upwd=$_POST["pwd"];

                        $SQL= "SELECT*FROM user WHERE uName='$uId' AND uPwd='$upwd'";
                        $result=mysqli_query($link,$SQL);
                        if(mysqli_num_rows($result)){
                            $_SESSION["login"]="user";
                            setcookie("account",$account,time()+17280);
                            header('Location:register.php');
                        }else{
                            echo "帳號密碼錯誤";
                        }
                    }
                }
                /*
                if(isset($_POST["account"])){
                    if($_POST["account"]!=null){
                        $account=$_POST["account"];
                        $pwd=$_POST["pwd"];
                        if(($aID==$account && $apwd==$pwd)){
                                $_SESSION["login"]="admin";
                                setcookie("account",$account,time()+17280);
                                header('Location: chickAccount.php');
                            }else if($uID==$account && $upwd==$pwd){
                                $_SESSION["login"]="user";
                                setcookie("account",$account,time()+17280);
                                header('Location: chickAccount.php');
                            }else{
                                $_SESSION["login"]="no";
                                header('Location: chickAccount.php');
                            }
                    }else{
                        echo "請輸入帳號密碼";
                    }
                }else{
                    echo "歡迎登入, 請輸入帳號密碼！";
                }
                */
            ?>
        </h1></div>
    </body>       
</html>
