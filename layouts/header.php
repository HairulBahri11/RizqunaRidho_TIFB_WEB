<?php
    require ("config.php");
    // $email = $_GET['user_fullname'];

    // inisialisasi session
    session_start();

    // mengecek user pada session
    if(!isset($_SESSION['userid'])) {
        $_SESSION['msh'] = 'anda harus login untuk mengakses halaman ini';
        header('Location: login.php');
    }
    $sesID = $_SESSION['userid'];
    $sesName = $_SESSION['nama'];
    $sesAlamat = $_SESSION['alamat'];
    $sesNotelp = $_SESSION['notelp'];
    $sesEmail = $_SESSION['email'];

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style1.css">

  <title><?= $title ?></title>
</head>

<body>

<?php include('navbar.php') ?>