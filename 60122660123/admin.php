<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page </title>
</head>
<style type="text/css">
html, 
body {
height: 100%;
}

body {
background-image: url(https://giffiles.alphacoders.com/133/13340.gif);
background-repeat: no-repeat;
background-size: 100% 100%;
}
</style>
<body>

<script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>
<center><h3> <h3 id="r1">All User</h3>
</center>
 <center><br>
           <table class="table table-dark"style="height: 500px; width: 900px;">
        <thead>
          <tr>
           <th scope="col",width = "90"><div align = "center">ID</div></th></th>
           <th scope="col",width = "90"><div align = "center">Name</div></th></th>
           <th scope="col",width = "90"><div align = "center">Username</div></th></th>
           <th scope="col",width = "90"><div align = "center">Edit</div></th></th>
           <th scope="col",width = "90"><div align = "center">DEL</div></th></th>
     
           </tr>
        </thead>
        </center>
 <?php 
     include 'Singdatabase.php';

        $sql = "SELECT * FROM member1";
        $query = mysqli_query($link, $sql);
        while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) //ใช้ในการคืนค่าข้อมูลในฐานข้อมูลที่อยู่ในลักษณะเป็นแถวหรือว่าเป็น
        {
            ?>
            <tr class="table-primary">
           
            <td class="table-primary"><div align="center">
            <?php echo $result['ID'];?></div></td>
            <td><div align="center">
            <?php echo $result['Mname'];?></div></td>
            <td><div align="center">
            <?php echo $result['Uname'];?></div></td>
            <td><div align="center">
            <a href="FrmEditMem.php?ID=<?php echo $result['ID'];?>"><ion-icon name="construct"></ion-icon></a></td>
            <td><div align="center"><a href="JavaScript:if(confirm('Confirm Delete?')== true){window.location='DelMem.php?ID=<?php echo $result['ID'];?>';}"><ion-icon name="trash"></ion-icon></a></td>
            </tr>
            <?php

        
      }
    ?>
</table>
<?php 
mysqli_close($link);
?>
<!--ลิ้งโดยใช้ข้อความ-->
<p>
<center><a href="Insertmem.php"><button type="button" class="btn btn-warning">เพื่มชมาชิก</button></a></center><br>
<center><a href="Homepage.php"><button type="button" class="btn btn-success">เข้าสู่เว็ปไซต์</button></a></center><br>
<center><a href="JavaScript:if(confirm('คุณต้องการลบหรือไม่')== true){window.location='Glogin.php';}"><button type="button" class="btn btn-danger">Logout</button></a></td>

</center>
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script>src="node_modules/bootstrap/dist/css/bootstrap.min.css"</script>
</body>

</html>