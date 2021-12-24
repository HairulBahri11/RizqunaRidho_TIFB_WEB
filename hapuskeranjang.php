<?php

include('config.php');

$id = $_GET['idcart'];
mysqli_query($con, "DELETE FROM cart WHERE idcart='$id'")or die(mysql_error());
header("location:home.php")

?>