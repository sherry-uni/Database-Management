<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<h1 class="big-title">
<?php 
header('Content-Type: text/html; charset=utf-8');
$username=$_POST['customername'];

$flag = FALSE;
$fp = fopen("customers.csv", "r");
while (($data = fgetcsv($fp, ",")) !== FALSE) {
    $name = $data[0];
    $email = $data[1];
    $location = $data[2];
    $psw = $data[3];
    if ($username == $name){
        $c_name=$name;
        $c_mail=$email;
        $c_location=$location;
        $c_psw=$psw;
        $flag = True;
    }
}
if ($flag) {
    print "搜尋結果";
    echo "<br><br>";
    echo "<div align=center style=font-size:30px;>";
    echo "<table border=1>";
    echo "<tr style=background-color:#6495ed;color:white;>"."<td>";
    echo "Name"."</td>"."<td>"."Mail"."</td>"."<td>"."Location"."</td>"."<td>"."password"."</td>";
    echo "</tr>";
    echo "<tr style=background-color:#87ceeb;>";
    echo "<td>".$c_name."</td>";
    echo "<td>".$c_mail."</td>";
    echo "<td>".$c_location."</td>";
    echo "<td>".$c_psw."</td>";
    echo "</tr>";
    echo "</table>";
    echo "</div>";
}else{
    // echo "<br>";
    echo "搜尋結果";
    echo "<br>"."<br>";
    echo "搜尋不到".$username."的資料" ;
}
?> 
</h1>
</body>
</html>
