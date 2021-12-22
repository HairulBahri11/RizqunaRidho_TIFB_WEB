<?php
    require ("../config.php");
    // $email = $_GET['user_fullname'];

    // inisialisasi session
    session_start();

    // mengecek user pada session
    if(!isset($_SESSION['idpetugas'])) {
        $_SESSION['msh'] = 'anda harus login untuk mengakses halaman ini';
        header('Location: login.php');
    }
    $sesID = $_SESSION['idpetugas'];
    $sesPetugas = $_SESSION['namapetugas'];
    $sesLvl = $_SESSION['role'];

    if ($sesLvl == 1) {
        $dis = "";
    } else {
        $dis = "disabled";
    }

    if($sesLvl == 1){
        $rolenya = "SUPER ADMIN";
    }else{
        $rolenya = "PETUGAS";
    }

?>