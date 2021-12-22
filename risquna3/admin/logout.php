<?php 
session_start();
unset($_SESSION['idpetugas']);
session_destroy();
header('Location: index.php');
?>