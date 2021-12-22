<?php
    include('../config.php');
    $idcart = $_GET['id'];
    mysqli_query($con, "UPDATE cart SET status = 'SENDING PACKAGE' WHERE idcart = '$idcart'");
    header('location: kelola_pesanan.php');
?>