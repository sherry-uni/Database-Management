<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>search.php</title>
</head>
<body text="blue">
<center>
<?php
session_start();  // 啟用交談期
if (isset($_POST["Search"])) {
   // 建立SQL字串
   // Please insert code here.
   $sql="SELECT * FROM contact ";
   // 檢查是否輸入姓名
   // Please insert code here.
  if ($_POST["Name"]!= NULL) {
    $NAME=$_POST["Name"]; 
  }
   // 檢查是否輸入電話號碼
   // Please insert code here.
  if ($_POST["Tel"]!=NULL) {
    $TEl=$_POST["Tel"];
  }
   // if條件組合SQL字串
   // Please insert code here.
   if($NAME!=NULL && $TEl != NULL){
    $sql.="WHERE name = '".$NAME."' and tel = '".$TEl."';"; 
   }
   if ($NAME == NULL && $TEl !=NULL) {
    $sql.="WHERE tel = '".$TEl."';"; 
   }
   if ($NAME != NULL && $TEl == NULL) {
    $sql.="WHERE name = '".$NAME."';"; 
   }
		// -只有姓名
        // -只有電話號碼
        // -最後加上排序
   $_SESSION["SQL"] = $sql;
   header("Location: contacts.php");  // 轉址
}
?>
<form action="search.php" method="post">
<table border="1">
<tr><td>搜尋姓名: </td>
  <td><input type="text" name="Name" 
             size="10" maxlength="20"/></td></tr>
<tr><td>搜尋電話: </td>
  <td><input type="text" name="Tel"
             size="20" maxlength="20"/></td></tr>
<tr><td colspan="2" align="center">
  <input type="submit" name="Search" value="搜尋"/></td>
</tr>
</table>
</form>
<hr/><a href="index.php">首頁</a>
| <a href="add.php">新增聯絡資料</a>
| <a href="search.php">搜尋通訊錄</a></center>
</body>
</html>