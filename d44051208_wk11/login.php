<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>login.php</title>
</head>
<body>
<?php
session_start();  // 啟用交談期
$username ="";  $password = "";
// 取得表單欄位值
if ( isset($_POST["Username"]) )
   $username = $_POST["Username"];
if ( isset($_POST["Password"]) )
   $password = $_POST["Password"];
// 檢查是否輸入使用者名稱和密碼
if ($username != "" && $password != "") {
   // 建立MySQL的資料庫連接 
   $link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'myschool');  // 預設使用的資料庫名稱
    //connect to database "myschool"
	
   //送出UTF8編碼的MySQL指令
   mysqli_query($link, 'SET NAMES utf8');
   //select table from "students"
   
   // 建立SQL指令字串
   $sql = "SELECT * FROM students";
    $total_records=-1;
   // 執行SQL查詢
   if ( $result = mysqli_query($link, $sql) ) {
        while( $row = mysqli_fetch_assoc($result) ){
        // echo $row["sno"]."-".$row["name"]."<br/>";
        if($row['username']==$username && $row['password']==$password){
            echo $row['name'].$row['username'].$row['password'];
            $total_records=1;
        }
    }
    }
   if ( $total_records > 0 ) {
      // 成功登入, 指定Session變數
      $_SESSION["login_session"] = true;
      header("Location: index.php");
   } else {  // 登入失敗
      echo "<center><font color='red'>";
      echo "使用者名稱或密碼錯誤!<br/>";
      echo "</font>";
      $_SESSION["login_session"] = false;
   }
    // 關閉資料庫連接  
	mysqli_close($link);
    }
?>
<form action="login.php" method="post">
<table align="center" bgcolor="#FFCC99">
 <tr><td><font size="2">使用者名稱:</font></td>
   <td><input type="text" name="Username" 
             size="15" maxlength="10"/>
   </td></tr>
 <tr><td><font size="2">使用者密碼:</font></td>
   <td><input type="password" name="Password"
              size="15" maxlength="10"/>
   </td></tr>
 <tr><td colspan="2" align="center">
   <input type="submit" value="登入網站"/>
   </td></tr> 
</table>
</form>
</body>
</html>