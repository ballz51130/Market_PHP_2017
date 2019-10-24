<html>
<body>
<center>
<img src="http://www.innesvienna.net/Theme/img/success.png">
<font size="10" color="blue">
<br>

<?php

 include 'Singdatabase.php'; $ID = $_POST['MID'];
 $sql = "UPDATE member1 SET Mname ='".$_POST['txtName']."',Uname = '".$_POST['txtUName']."',Passwd = '".$_POST['txtpasswd']."',MType = '".$_POST['mtype']."' WHERE ID=".$ID;
$query = mysqli_query($link, $sql);
if($query==TRUE)
{
    echo"UPdate Complete";
    echo"<META HTTP-EQUIV ='Refresh' CONTENT = '2;URL=admin.php'>";
}
else
{
    echo "Error , can't UPdate member";
      echo "<META HTTP-EQUIV='Refresh'CONTENT = '2;URL=admin.php'>";
}
mysqli_close($link);
?>

</center>
</body>
</html>
