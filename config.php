<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "risquna1";
    $con = mysqli_connect($server, $username, $password, $db);
//jika koneksi gagal
    if(mysqli_connect_errno()) {
        echo "koneksi gagal : ".mysqli_connect_error();
    }
?>