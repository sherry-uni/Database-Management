<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body id="body">
    <img src="http://aacsb.management.ncku.edu.tw/css/images/header.jpg" class="top-pic" alt="header picture">
    <p style="color: green">註冊新帳號</p>
    <form action="submit.php" method="POST">
        <div>
            <div id="div">
                <span style="color: red;">*</span>學號(帳號): <input type="text" name="id">
            </div>
            <div id="div">
                <span style="color: red;">*</span>姓名: <input type="text" name="name">
            </div>
            <div id="div">
                <span style="color: red;">*</span>設定密碼: <input type="password" name="pwd">(最多10碼英數字0-9,a-z,A-Z，請勿使用特殊符號)
            </div>
            <div id="div">
                <span style="color: red;">*</span>確認密碼: <input type="password" name="pwd_confirm"></div>
            <div id="div">
                <span style="color: red;">*</span>Email: <input type="text"
                    name="email"><br>(請務必正確填寫,日後若忘記密碼,系統依此信箱寄送密碼)</div>
            <div id="div">
                <span style="color: red;">*</span>系所: <select name="department" id="dpt">
                    <option value="A1">A1 中文所博士班</option>
                    <option value="A2"> A2 外文所博士班</option>
                    <option value="A3">A3 歷史所博士班</option>
                    <option value="A4">A4 台文所博士班</option>
                    <option value="A5"> B1 中文系</option>
                </select></div>
            <div id="div">
                連絡電話: <input type="text" name="phone"></div>
            <div id="div">
                接收系統e-mail：<input type="radio" name="receive_mail" value="yes" checked>是
                <input type="radio" name="receive_mail" value="no">否</div>
            <div id="div">
                您是應屆畢業生嗎? <input type="radio" name="graduate" value="yes">是
                <input type="radio" name="graduate" value="no" checked>否</div>
            <div id="div">
                認證碼: <img src="http://aacsb.management.ncku.edu.tw/securimage/securimage_show.php" alt=""><img
                    src="http://aacsb.management.ncku.edu.tw/securimage/images/refresh.gif" alt="">
                <br><input type="text" name="verifycode">(請輸入4碼認證碼) </div>
            <div id="div">
                <input type="submit" value="確定註冊">
                <input type="button" value="回上頁"></div>
        </div>
    </form>
    <?php echo 'hello' ?>
    <footer id="footer">最佳瀏覽環境：IE. 7.0以上/Firefox 3.x/Chrome 4以上/Safari 4以上College of Management, NCKU All rights
        Reserved.</footer>
</body>


</html>