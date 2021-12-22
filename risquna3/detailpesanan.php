<?php 

$title = "Pesanan Saya";
include('layouts/header.php') 

?>

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="background">
                <?php
                    $idcart = $_GET['idcart'];
                    $result   = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM cart WHERE idcart = '$idcart'"));
                ?>
                <h3>Pesanan <?php echo $result['kodeorder']  ?></h3>
                <hr>

                    <!-- content table  -->
                    <table class="table mt-5 mb-5">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Item</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $items = mysqli_query($con, "SELECT * FROM cart_detail WHERE idcart = '$idcart'");
                            while($data = mysqli_fetch_array($items)) {
                            $products = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM produk WHERE idproduk = '$data[idproduk]'"));
                        ?>
                        <tr>
                            <td scope="col"><?= $no++ ?></td>
                            <td scope="col"><img src="<?= $products['gambar'] ?>" alt="" width="70px" height="60px"></td>
                            <td scope="col"> <?= $products['namaproduk'] ?></td>
                            <td scope="col"><?= $data['qty'] ?></td>
                            <td scope="col">Rp.<?= $products['hargaafter'] * $data['qty'] ?>,-</td>
                        </tr>   
                        <?php  
                        }
                        ?>
                    </tbody>
                </table>
                <div class="total-belanja">
                    <div class="row">
                        <div class="col">
                            <p>Total Belanja<span> (termasuk ongkir )</span></p>
                            <h3>Rp.<?= $result['totalbelanja'] ?>,-</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php 


include('layouts/footer.php'); ?>