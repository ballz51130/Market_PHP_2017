<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Insert menber</title>
    
</head>
<body>
<body background="http://img.thzhost.com/i/lz/otxku.gif">
<form name='Insertmem' method='POST' action='addmem.php'>
<center><h3>New Member</h3></center>
<table width="400" border="1"align="center">
    <tbody>
        <tr>
            <td width="125"> &nbsp;Name</td>
            <td widrh="180">
                <input name="txtName"type="text" id="txtName" size="20">
               
            </td>
        </tr>
        <tr>
            <td width="125"> &nbsp;UserName</td>
            <td widrh="100">
                <input name="txtUName"type="text" id="txtUName" size="20">
                </td>
            </td>
        </tr>
        <tr>
            <td width="125"> &nbsp;Password</td>
            <td widrh="180">
                <input name="txtpasswd"type="text" id="txtpasswd" size="20">
               
            </td>
        </tr>
        <tr>
            <td width="125"> &nbsp;Type</td>
            <td widrh="180">
                <select name="mtype" id="mytype">
                    <option value="admin">ADMIN</option>
                    <option value="member">MEMBER</option>
                </selet>
               
            </td>
        </tr>
        </tbody>
        </table>
        <br>
            <center>
            <button type="submit" class="btn btn-warning">เพื่มชมาชิก</button> 
                </center>
    </form>





<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
</body>

</html>