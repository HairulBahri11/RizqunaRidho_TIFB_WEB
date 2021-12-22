<?php
$title = "Checkout";
include('layouts/header.php');

$idcarttt = $_GET['idcart'];
$sql = "SELECT * from cart where idcart = '$idcarttt'";
$sql1 = "SELECT * from cart_detail where idcart = '$idcarttt'";
$q = mysqli_query($con, $sql);
$q1 = mysqli_query($con, $sql1);
$data = mysqli_fetch_array($q);
$data1 = mysqli_fetch_array($q1);

?>

<section class="cart">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7">
                <div class="d-flex justify-content-between">
                    <p class="text-secondary">Koder Order Anda</p>
                    <h4 class="text-dark"><?php echo $data['kodeorder']; ?></h4>
                </div>
                <hr class="grs">
                <h5 class="mt-5">Harga yang harus dibayar </h5>

                <div class="row justify-content-between mt-4">
                    <div class="col-4">
                    
                        <p><?php 
                         echo $data1['qty'];?> Items</p>
                    </div>
                    <div class="col-1">:</div>
                    <div class="col">
                        <h5 style="float: right;"><?php  echo $data['totalbelanja'];?></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Ongkos pengiriman</p>
                    </div>
                    <div class="col-1">:</div>
                    <div class="col">
                       
                        <h5 style="float: right;">Rp. 10.000</h5>
                    </div>
                </div>

                <a href="checkout_konfirmasi.php?totalbelanja=<?php echo $data['totalbelanja'];?>" class="btn btn-primary w-100 mt-3">I agree and checkout</a>
            </div>
            <div class="col-md-5">
                <div class="metode">
                    <h5>Metode Pembayaran</h5>
                    <hr class="grs">
                    <div class="bca mt-4">
                        <img src="Img/metode/bca.png" alt="">
                        <p class="p">Bank BCA - 13131231231<br>a/n. risquna ridho</p>
                    </div>
                    <div class="bca mt-5">
                        <img src="Img/metode/bni.png" alt="">
                        <p class="p">Bank BCA - 13131231231<br>a/n. risquna ridho</p>
                    </div>
                    <div class="bca mt-5">
                        <img src="Img/metode/gopay.png" alt="">
                        <p class="p">Bank BCA - 13131231231<br>a/n. risquna ridho</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<?php 


include('layouts/footer.php'); ?>