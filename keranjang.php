<?php 
    $title = "Keranjang";
    include('layouts/header.php'); 
    $result = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM cart WHERE userid = '$_SESSION[userid]' AND status = 'INCART'"));
 ?>



    <div class="cart">
        <div class="container">
            <div class="row gap-5">
                <div class="col-md-6">
                    <h3>
                        Your cart
                    </h3>
                    <hr>
                    <div class="list-item">
                        <?php
                            $query = mysqli_query($con, "SELECT * from cart_detail WHERE idcart = $result[idcart]");
                            while($row = mysqli_fetch_array($query)) {
                                $produk = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM produk WHERE idproduk = $row[idproduk]"));
                                $qty      = $row['qty'];
                                $nama     = $produk['namaproduk'];
                                $img      = $produk['gambar'];
                                $after    = $produk['hargaafter'] * $qty;
                                $before   = $produk['hargabefore'];


                        ?>
                        <div class="row">
                            <div class="col-md-2">
                                 <?php echo '<img src="' . $img . '" alt="tidak ketemu"  width="71px" height="60px">'; ?>
                            </div>
                            <div class="col-md-7">
                                <div class="nama-harga">
                                    <p class="nama-item"><?php echo $nama ?></p>
                                <p class="harga">Rp. <?php echo $after ?></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="add">
                                    <div class="d-flex gap-3">
                                    <a href="" class="btn btn-primary bx bx-minus"></a>
                                    <p><?php echo $qty ?></p>
                                    <a href="" class="btn btn-primary  bx bx-plus"></a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="summary">
                        <h4>Summary</h4>
                        <div class="d-flex gap-5 justify-content-between">
                            <p>Total Price (5 items)</p>
                            <p class="total">Rp.<?php echo $result['totalbelanja']; ?>,-</p>
                        </div>
                        <hr class="garis">
                        <div class="d-flex gap-5 justify-content-between">
                            <h4>Total Price</h4>
                            <h4 class="total-price">Rp.<?php echo $result['totalbelanja']; ?>,-</h4>
                        </div>
                        <a href="checkout.php?idcart=<?php echo $result['idcart'] ?>" class="btn btn-primary">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('layouts/footer.php') ?>