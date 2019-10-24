<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>การเข้าสู่ระบบ</title>
    
</head>
<br>
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

<br><br><br><br><br><br>
<font size="5">
<center>

    <form name="login" method = "POST" action = "TGlogin.php">เข้าสู่ระบบ<br>
    <table border="1" style="width: 300px",>
    <tbody> 
        <tr>
            <td> &nbsp;Username</td>
            <td><input name="txtUsername" type="text"class="form-control" id="txtUsername"placeholder="กรุณาใส่ไอดี"></td>
        </tr>
        <tr>
            <td> &nbsp;Password</td>
            <td><input name="txtPassword" type="Password"class="form-control" id="txtPassword"placeholder="กรุณาใส่รหัสผ่าน"></td>
        </tr>
    </tbody>
    </table>
    <br>
    <a href="newmem.php"><button type="button" class="btn btn-outline-dark">สมัครชมาชิก</button>
    <button type="submit" class="btn btn-warning">Login</button>
    </form>
</center>

<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
<br><br><br><br>    
<img src="https://giffiles.alphacoders.com/988/9881.gif"align="Right">
</html>