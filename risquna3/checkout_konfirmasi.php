<?php

include ('config.php');
session_start();
if(!isset($_SESSION['userid'])) {
    $_SESSION['msh'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: login.php');
}
$sesID = $_SESSION['userid'];
$totbel = $_GET['totalbelanja'];


$sql = "SELECT * from cart where userid = '$sesID' AND status = 'INCART'";
$q = mysqli_query($con, $sql);
$data = mysqli_fetch_array($q);
$dt = $totbel+10000;


if($data){
    $updatestatus      = mysqli_query($con, "UPDATE cart SET status = 'WAITING PAYMENT' WHERE idcart = '$data[idcart]'");
    $updateharga        = mysqli_query($con, "UPDATE cart SET totalbelanja = '$dt' WHERE idcart = '$data[idcart]'");
}

?>
<script>
    alert('Berhasil checkout produk');
    window.location = 'home.php';
</script>