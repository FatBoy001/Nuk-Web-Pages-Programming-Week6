<html>
    <head>
        <link href="css/member.css" rel="stylesheet"><!-- 透過css對網頁進行美化 -->
        <link href="/img/icon.jpg" rel="icon">
        <title>註冊資料</title>
        <meta http-equiv="Content-Language" content="zh-TW">
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8">
        <meta name="description" content="註冊結果">
        <meta name="author" content="FatBoy001">
        <meta name="distribution" content="Taiwan">
    </head>
    <body style="background:#FAE8E0;">
        <font color="White">
        <div class="contain">
            <center>
            <spam style="color:White;border: 2px white dashed;font-size:72px;">註冊資料</spam>
            <hr color="white">
            <?php
                $account = $_POST["account"];
                $email = $_POST["email"];
                $tel = $_POST["tel"];
                $pwd = $_POST["pwd"];
               
                
                echo "<b>你的帳號</b>".$account;
                echo "<br><b>你的密碼</b>".$pwd;
                echo "<br><b>你的電話</b>".$tel;
                echo "<br><b>你的信箱</b>".$email;  
                echo "<hr color='white'>";  
                echo "<a href='/Nuk-Web-Pages-Programming-Week5/index.php'><button style='height:40px; width:25%;'>登入畫面</button></a>";
            ?>
            </center>
            </br>
        <div class="contain">
        <font>
    </body>
</html>