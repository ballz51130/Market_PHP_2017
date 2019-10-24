<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
   
<?php
session_start();
session_destroy();
$host = "localhost";
$uname = "root";
$passwd = "";
$db = "harumyx";
$link = mysqli_connect($host,$uname,$passwd,$db);
if(!$link) {
    echo "Error: Unable to connect to MySQL.". PHP_EOL;
    exit;
}

$sql = "SELECT * FROM member1 WHERE Uname ='".$_POST['txtUsername']."' AND Passwd ='".$_POST['txtPassword']."'";
$query = mysqli_query($link, $sql);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);

if(!$result)
{
  
    echo "<center><h1>Username OR Password ผิดพลาดโปรดใส่ใหม่อีกครั้ง</h1>";
   echo "<META HTTP-EQUIV='Refresh' CONTENT ='3;URL=Glogin.php'>";?>
   <img src="http://www.charoentech.com/assets/img/blog/%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B9%81%E0%B8%AA%E0%B8%94%E0%B8%87%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9A%E0%B8%B1%E0%B8%99%E0%B8%97%E0%B8%B6%E0%B8%81.jpg">
   <?php
}
else

{ if($result["MType"]=="admin")
    {
        $_SESSION['Status'] = "admin";
        $_SESSION['MName'] = $result['Mname'] ;

        header("location: admin.php");
    }
    else
    {
        $_SESSION['Status']="member";
        header("location: Homepage.php");
    }
}
mysqli_close($link);
?>
</body>
</html>