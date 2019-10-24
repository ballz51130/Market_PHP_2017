<?php
$count=0; //ถ้าไม่กำหนดจะไม่สามารถเช็กคำสั่งต่อไปได้
 require('Singdatabase.php'); //เป็นคำสั่งที่เรียกใช้งานแล้วไฟล์ดังกล่าวจะต้องมีอยู่จริง ถ้าไม่พบไฟล์โปรแกรมก็จะหยุดทำงานในทันที
if(!empty($_GET)){        //ใช้เพื่อตรวจสอบว่า "ตัวแปรนั้นๆ ได้ถูกกำหนดขึ้น และมีค่าที่ไม่ใช่ null หรือไม่"

  $x =$_GET['txtsearch']; //เก็บค่าตัวแปลที่ค้นหาในตัวแปล $x

  $sql="select * from item where itemname like '%$x%'";

  $query = mysqli_query($link, $sql);

  $count = mysqli_num_rows($query);


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <br>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>ค้นหาข้อมูล</title>

</head>
<body>
  
        <html>
        <div class="float-center"><font color ="FF99FF",>
                <h4>
         <center>  <form name="f" method="get" action="frmmarket.php" >
           <h1> ค้นหา</h1>
           <input type ="text" name="txtsearch">
           <button class="btn btn-success"type ="submit">ค้นหา</button>
           &nbsp;<a href="Homepage.php"><button type="button" class="btn btn-outline-dark">ย้อนกลับ</button></a></div><br>  
            <head>
                
                </head> 
<body background="http://images5.fanpop.com/image/photos/25900000/Hatsune-Miku-vocaloids-25974224-1920-1200.jpg" >
                
</center>
           </form>
       <center>    <table class="table table-dark "style="height: 500px; width: 900px;">
           
  <thead>
    <tr>
      <th scope="col",width = "90"><div align = "center">id</div></th></th>
      <th scope="col",width = "90"><div align = "center">รหัสสินค้า</div></th></th>
      <th scope="col",width = "90"><div align = "center">ชื่อสินค้า</div></th></th>
      <th scope="col",width = "90"><div align = "center">ราคาสินค้า</div></th></th>
      <th scope="col",width = "90"><div align = "center">ตัวอย่างสินค้า</div></th></th>
    </tr>
  </thead>

    </tr>
         <?php

           if($count>0){
            while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                ?>
                <tr>
                <td><div align="center"> <!--ใช้สำหรับครอบวัตถุที่เราต้องการ เพื่อจัดรูปแบบต่างๆ ให้กับวัตถุในตำแหน่งนั้นๆ สามารถใส่ค่าไปตรงๆได้-->
            <?php echo $result['id'];?></div></td>
            <td><div align="center">
            <?php echo $result['codename'];?></div></td>
            <td><div align="center">
            <a href="infoitem.php?id=<?php echo $result['id'];?>"><?php echo $result['itemname'];?></a></td>
            <td><div align="center">
            <?php echo $result['price'];?></div></td>
            <td><div align="center">
            <?php  echo $result['img'];?></div></td>
            <td><div align="center">  
            
          
            <?php
               }
           }
           

           ?>
           </table>
           <?php
           mysqli_close($link);
           ?>
           </center>
</body>
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</html>