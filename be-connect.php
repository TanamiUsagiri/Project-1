<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "websitelogin";
    $conn_npt = mysqli_connect("$servername","$username","$password","$dbname");
/*    if($conn_npt->errno){
        echo "Lỗi kết nối, ". $conn_npt->error;
    }else{
        echo "<h1> Xin chào, Nguyễn Phong Tân - 2210900123 </h1>";
    }*/
?>