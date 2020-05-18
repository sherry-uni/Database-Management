<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();  // 啟用交談期
    // 檢查Session變數是否存在, 表示是否已成功登入
    if ( $_SESSION["login_session"] != true ) 
   header("Location: login.php");
    echo "歡迎使用者進入網站!<br/>";
    ?>
</body>
</html>