<?php
$host = "localhost";
$uname = "root";
$passwd = "";
$db = "harumyx";
$link = mysqli_connect($host,$uname,$passwd,$db);
    //กำหนดให้ใช็รูปแบบรหัสภาษา แบบ urf8 
    mysqli_set_charset($link, "utf8");
    if(!$link){
        echo"Error: Unable to coonect to MySQL.".PHP.EOL;
    echo"Debugging error " .mysqli_coonect() . PHP_EQL;
    echo"Debugging error " .mysqli_coonect() . PHP_EQL;
    exit;
    }
    ?>