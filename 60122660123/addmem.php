<html>
<body>
<center>
<font size="100" color="blue">

<br>
<?php
if(($_POST['txtName']!="")AND($_POST['txtUName']!="")){
    include 'Singdatabase.php' ;
    $sql = "Insert INTO member1(Mname, Uname, Passwd, MType) VALUES('".$_POST['txtName']."','".$_POST['txtUName']."','".$_POST['txtpasswd']."','".$_POST['mtype']."')";
   
    

    $query = mysqli_query($link, $sql);
    
    if($query)
    {
        echo"Insert Success<br>";
        echo"<META HTTP-EQUIV ='Refresh' CONTENT = '2;URL=Glogin.php'>";?>
        <img src ="https://www.freeiconspng.com/uploads/success-icon-10.png">
        
        <?php
        
    }
    else{
        echo "Error , Insert Again";
      echo "<META HTTP-EQUIV='Refresh'CONTENT = '2;URL=admin.php'>";
    }
    mysqli_close($link);
}
else
{
    echo "Error , Insert Name and password Again";
    echo "<META HTTP-EQUIV='Refresh'CONTENT = '2;URL=newmem.php'>";?>
 <img src="http://www.charoentech.com/assets/img/blog/%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B9%81%E0%B8%AA%E0%B8%94%E0%B8%87%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9A%E0%B8%B1%E0%B8%99%E0%B8%97%E0%B8%B6%E0%B8%81.jpg">
    <?php
  
}
?>

</center>
</body>
</html>