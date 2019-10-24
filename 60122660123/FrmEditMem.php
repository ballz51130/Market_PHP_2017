<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Edit menber</title>

</head>
<body>
<body background="http://img.thzhost.com/i/lz/otxku.gif">
<?php
include 'Singdatabase.php'; $ID = $_GET['ID'];
$sql = "SELECT * FROM member1 WHERE ID=".$ID;
$query = mysqli_query($link, $sql);
$result = mysqli_fetch_array($query)
?>
<form name='EditMem' method='POST' action='UpdateMem.php'>
<center><h3>Update Mem</h3>
<table class="table table-dark"style="height: 500px; width: 900px;">
    <tbody>
    <input name="MID"type="hidden" id="MID"value="<?php echo $result['ID']?>">
        <tr>
            <td width="125"> &nbsp;Name</td>
            <td widrh="180">
                <input name="txtName"type="text" id="txtName" value="<?php echo $result['Mname'];?>">
               
            </td>
        </tr>
        <tr>
            <td width="125"> &nbsp;UserName</td>
            <td widrh="100">
                <input name="txtUName"type="text" id="txtUName" value="<?php echo $result['Uname'];?>">
                </td>
            </td>
        </tr>
        <tr>
            <td width="125"> &nbsp;Password</td>
            <td widrh="180">
                <input name="txtpasswd"type="text" id="txtpasswd" value="<?php echo $result['Passwd'];?>">
               
            </td>
        </tr>
        <tr>
            <td width="125"> &nbsp;Type</td>
            <td widrh="180">
            <?php
                        if($result['MType']=="admin")
                        {
                           echo " <select name=\"mtype\" id=\"mtype\">;
                            <option value=\"admin\" selected = \"selected\">ADMIN</option>
                            <option value\"member\">MEMBER</option>
                              </select>";

                        }
                        else{
                            echo " <select name=\"mtype\" id=\"mtype\">
                            <option value=\"admin\">ADMIN</option>
                            <option value\"member\" selected = \"selected\">MEMBER</option>
                              </select>";

                        }
                ?>
                    </center>
               
            </td>
        </tr>
        </tbody>
        </table>
        <br>
            <center>
                <input type="submit" name="Submit" value="Save">
                </center>
    </form>



<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


    
</body>
</html>