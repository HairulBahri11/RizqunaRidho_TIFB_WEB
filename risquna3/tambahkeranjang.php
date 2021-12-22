<?php
    include('config.php');

    session_start();
    if(!isset($_SESSION['userid'])) {
        $_SESSION['msh'] = 'anda harus login untuk mengakses halaman ini';
        header('Location: login.php');
    }
    $sesID = $_SESSION['userid'];
    
    
    $randomchar      = crypt(rand(22,999),time());
    $idproduk        = $_GET['id'];
    $tanggal_belanja = date('Y-m-d');
    $produk          = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM produk WHERE idproduk = '$idproduk'"));
    $hargaproduk     = $produk['hargaafter'];

    if(mysqli_num_rows(mysqli_query($con, "SELECT * FROM cart WHERE userid = '$sesID' AND status = 'INCART'")) > 0) {
        
        // MENAMPILKAN CART BER ID USER n DAN BERSTATUS IN CART
        $cartview        = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM cart WHERE userid = '$sesID' AND status = 'INCART'"));

        // JADI KALO BARANGNYA UDAH ADA DI KERANJANG, MAKA HANYA QUANTITYNYA SAJA YANG DITAMBAH
        if(mysqli_num_rows(mysqli_query($con, "SELECT * FROM cart_detail WHERE idproduk = '$idproduk' AND idcart = '$cartview[idcart]'")) > 0) {
            $updateitemcart   = mysqli_query($con, "UPDATE cart_detail SET qty=qty+1 WHERE idproduk='$idproduk' AND idcart = '$cartview[idcart]'");
            $updatetotal      = mysqli_query($con, "UPDATE cart SET totalbelanja = totalbelanja+$hargaproduk WHERE idcart = '$cartview[idcart]'");
        } else {
            // TAMBAH ITEM KE CART
            $additemtocart   = mysqli_query($con, "INSERT INTO cart_detail SET idcart='$cartview[idcart]',
                                                                idproduk='$idproduk',
                                                                qty=1");
            $updatetotal      = mysqli_query($con, "UPDATE cart SET totalbelanja = totalbelanja+$hargaproduk WHERE idcart = '$cartview[idcart]'");
        }
    } else {
        // TAMBAH CART
        $tambahkeranjang = mysqli_query($con, "INSERT INTO cart SET kodeorder='$randomchar',
                                                                    userid='$sesID',
                                                                    tglbelanja='$tanggal_belanja',
                                                                    status='INCART' ");
        // MENAMPILKAN CART TERAKHIR
        $cartview        = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM cart ORDER BY idcart DESC LIMIT 1"));

        // TAMBAH ITEM KE CART
        $additemtocart   = mysqli_query($con, "INSERT INTO cart_detail SET idcart='$cartview[idcart]',
                                                                        idproduk='$idproduk',
                                                                        qty=1");
        $updatetotal      = mysqli_query($con, "UPDATE cart SET totalbelanja = totalbelanja+$hargaproduk WHERE idcart = '$cartview[idcart]'");
    }
    // REDIRECT TO DETAIL DAN MENAMBAHKAN ALERT
?>

<script>
    alert('Produk berhasil ditambah ke keranjang');
    window.location = 'detail_product.php?idproduk=' + <?= $idproduk ?>
</script>