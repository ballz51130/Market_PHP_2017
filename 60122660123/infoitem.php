<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>รายละเอียดสินค้า</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>
<body>

<body background="http://images5.fanpop.com/image/photos/25900000/Hatsune-Miku-vocaloids-25974224-1920-1200.jpg" >
                

<?php
include 'Singdatabase.php'; $ID = $_GET['id'];
    $sql = "SELECT * FROM item WHERE id=".$ID;
$query = mysqli_query($link, $sql);
$result = mysqli_fetch_array($query)
?>
<center><h3>รายละเอียดสินค้า</h3></center>
<table class="table table-hover"align="center"style="height: 500px; width: 900px;">
  <thead>
    <tr>
    <tbody>
    <input name="MID"type="hidden" id="MID"value="<?php echo $result['id']?>">
        <tr>
        <td class="bg-primary"width="125"> &nbsp;<b><h4>รหัสสินค้า</b></h4></td>
        <td class="table-warning"widrh="300"><div align="center"> </h3>
           <h3> <?php echo $result['codename'];?>
               
            </td>
        </tr>
        <tr>
        <h3>  <td class="bg-primary"width="125"> &nbsp;<b><h4>ชื่อสินค้า</b></td> </h4>
        <td class="table-info"widrh="180"><div align="center">
            <h4><?php echo $result['itemname'];?></h4>
                </td>
            </td>
        </tr>
        <tr>
        <td class="bg-primary"width="125"> &nbsp;<h4>ราคา</h3></td>
        <td class="table-success"widrh="180"><div align="center">
          <h3>  <?php echo $result['price'];?></h4>
               
            </td>
        </tr>
        <tr>
        <td class="bg-primary"width="125"> &nbsp;<h4>ตัวอย่างสินค้า</h4></td>
        <td class="table-danger"widrh="300"><div align="center">
            
        <h1>   <?php echo $result['img'];?></h1>
        
               
            </td>
        </tr>
        </tbody>
        </table>
        <br>
            <center>
            <a href="<?php echo $result['www'];?>"><button type="button" class="btn btn-info">สั่งซื้อสินค้า</button></a>
            &nbsp;<a href="Homepage.php"><button type="button" class="btn btn-outline-dark">ย้อนกลับ</button></a></div><br>
            </td>

                </center>
  





    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>