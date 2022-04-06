<html>
    <head><!-- 把機器讀取內容放head -->
        <link href="css/member.css" rel="stylesheet"><!-- 透過css對網頁進行美化 -->
        <link href="/img/icon.jpg" rel="icon">
        <title>註冊</title>
        <meta http-equiv="Content-Language" content="zh-TW">
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8">
        <meta name="keywords" content="墾丁,墾丁三日,kanding,travel,travel taiwan">
        <meta name="description" content="註冊">
        <meta name="author" content="FatBoy001">
        <meta name="distribution" content="Taiwan">
    </head>
    <body>
    <a href="/Nuk-Web-Pages-Programming-Week5/logout.php" style='text-decoration:none; color:black; border:2px black dashed;'>登出</a>
        <div class="contain"><h1>
            <font color="White">
                
                <?php
                    echo "<body bgcolor='#FAE8E0'>";
                ?>
                <center><spam style="color:White;border: 2px white dashed;font-size:72px;">註冊</spam></center>
                <hr color="white">
                <center>
                    <form action="/Nuk-Web-Pages-Programming-Week5/rinfo.php" method="post" enctype="multipart/form-data"><!--get會把全部變數與訊息顯示出來在url-->
                        <table style="color:white; font-size:30px;" bordercolor="white">
                            <tr>
                                <th>帳號:</th><th><input type="text" name="account" required></th>
                            </tr>
                            <tr>
                                <th>密碼:</th><td><input type="password" name="pwd" required></td>
                            </tr>
                            <tr>
                                <th>e-mail:</th><td><input type="email" name="email" required></td>
                            </tr>
                            <tr>
                                <th>Tel:</th><td><input type="tel" name="tel" placeholder="02-28115522" pattern="[0-9]{2}-[0-9]{8}" required></td>
                            </tr>
                            <tr>
                                <th><input type="reset"></th><th><input type="submit" style="width:100%;"></th>
                            </tr>
                        </table>
                    </form>
                </center>               
                <hr color="white">
            </font>
            </br>
        </h1></div>
    </body>       
</html>
