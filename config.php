<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "risquna";
    $con = mysqli_connect($server, $username, $password, $db);

    if(mysqli_connect_errno()) {
        echo "koneksi gagal : ".mysqli_connect_error();
    }
?>