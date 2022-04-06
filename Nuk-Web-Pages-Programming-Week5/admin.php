<html>
    <head><!-- 把機器讀取內容放head -->
        <link href="css/home.css" rel="stylesheet"><!-- 透過css對網頁進行美化 -->
        <link href="/img/icon.jpg" rel="icon">
        <title>墾丁三日文</title>
        <meta http-equiv="Content-Language" content="zh-TW">
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8">
        <meta name="keywords" content="墾丁,墾丁三日,kanding,travel,travel taiwan">
        <meta name="description" content="墾丁三日文介紹與表單填寫">
        <meta name="author" content="FatBoy001">
        <meta name="distribution" content="Taiwan">
    </head>
    <body>
        <div class="contain"><b>
            <font color="White">
                <a href='/Nuk-Web-Pages-Programming-Week5/logout.php' style="color:white;">登出</a>
                <?php
                    echo "<body bgcolor='#FAE8E0'>";
                ?>
                <center><spam style="color:White;   border: 2px white solid; font-size:42px;">Welcome to admin!</spam></center>
                行程內容
                <hr>
                <center>
                    <a href="https://bunnyann.com/kentingplay/" target="new"><img src="/Nuk-Web-Pages-Programming-Week5/img/pic1.jpg" height="25%" width="25%" style="color:White;   border: 2px white solid;"></a>
                    <a href="/HELLO.pdf" target="new"><img src="/Nuk-Web-Pages-Programming-Week5/img/pic2.jpg" height="25%" width="25%" style="color:White;   border: 2px white solid;"></a>
                
                <hr>
                <form action="/rinfo.php" method="post" enctype="multipart/form-data"><!--get會把全部變數與訊息顯示出來在url-->
                     <table style="color:white;">
                        <tr>
                            <th>Name:</th><td><input type="text" name="name" required></td>
                        </tr>
                        <tr>
                            <th>e-mail:</th><td><input type="email" name="email" required></td>
                        </tr>
                        <tr>
                            <th>tel:</th><td><input type="tel" name="tel" placeholder="02-28115522" pattern="[0-9]{2}-[0-9]{8}" required></td>
                        </tr>
                        <tr>
                            <th>Food Preference:</th><td>漢堡<input type="checkbox" name="food[]" value="漢堡" checked>義大利麵<input type="checkbox" name="food[]" value="義大利麵">飯糰<input type="checkbox" name="food[]" value="飯糰"></td>
                        </tr>
                        <tr>
                            <th>T-shirt Size:</th><td><select name="size">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select></td>
                        </tr>
                        <tr>
                            <th>T-shirt color:</th><td><input type="color" name="color"></td>
                        </tr>
                        <tr>
                            <th>Birthday:</th><td><input type="date" name="date"></td>
                        </tr>
                        <tr>
                            <th>Tickets:</th><td><input type="number" name="tickets"></td>
                        </tr>
                        <tr>
                            <th>其他評論:</th><td><textarea name="comment" cols="100" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <th>檔案傳送:</th><td> <input type="file" name="file"></td>
                        </tr>
                        <tr>
                            <th><input type="reset"></th><td><input type="submit" style="width:100%; height:50px;"></td>
                        </tr>
                    </table>
                </form>
                </center>
                <hr>
                <center> T-shirt Size對照表：
                    <table border="4px" style="color:white;" bordercolor="white">
                        <tr>
                            <th>Size</th><th>Coat Size</th><th>Chest</th><th>Waist</th>
                        </tr>
                        <tr>
                            <td>S</td><td>34-36</td><td>34"-36"</td><td>28"-30"</td>
                        </tr>
                        <tr>
                            <td>M</td><td>38-40</td><td>38"-40"</td><td>32"-34"</td>
                        </tr>
                        <tr>
                            <td>L</td><td>42-44</td><td>42"-44"</td><td>36"-38"</td>
                        </tr>
                        <tr>
                            <td>XL</td><td>62-64</td><td>62"-64"</td><td>62"-64"</td>
                        </tr>
                    </table>
                </center>
            </font>
            </br>
            <center><a href="#top" style="color:White;"><spam class="buttom" style="border: 2px white dashed;">back to top</spam></a></center>
        </b></div>
    </body>       
</html>
