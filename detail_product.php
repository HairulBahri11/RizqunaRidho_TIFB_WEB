<?php 

$title = "Detail";
include ('layouts/header.php');
$id = $_GET['idproduk'];
$result = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM produk WHERE idproduk=$id"));
 ?>

  <div class="detail">
    <div class="container">
      <div class="row">
        <div class="d-flex">
          <div class="col-md-7">
            <img src="<?= $result['gambar'] ?>" width="602px" height="514.73px" alt="">
          </div>
          <div class="col-md-5">
            <div class="content">
              <h3><?= $result['namaproduk'] ?></h3>
              <div class="d-flex gap-2">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <p class="rating"><?= $result['rating'] ?>(120)</p>
              </div>
              <div class="d-flex gap-2">
                <h4>Rp. <?= $result['hargaafter'] ?>,-</h4>
                <h4>Rp. <?= $result['hargabefore'] ?>,-</h4>
              </div>
              <hr class="garis">
              <p class="deskripsi"><?= $result['deskripsi'] ?></p>
              <a href="tambahkeranjang.php?id=<?php echo $result['idproduk']  ?>" class="btn btn-primary">Add to cart</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="product">
    <div class="container">
      <div class="title">
        <h3 class="text-start">Similar Products</h3>
      </div>
      <div class="product-item">
        <div class="row">
          <?php

            $query = "SELECT * from produk WHERE idkategori='$result[idkategori]' AND (NOT idproduk='$id')";
            $r = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($r)) {
            $idproduk  = $row['idproduk'];
            $nama  = $row['namaproduk'];
            $desk = $row['deskripsi'];
            $rating = $row['rating'];
            $img  = $row['gambar'];
            $after = $row['hargaafter'];
            $before = $row['hargabefore'];

            ?>
          
          <div class="col-md-3">
            <div class="card">
              <?php echo '<img src="' . $img . '" alt="tidak ketemu" class="card-img-top" alt="...">'; ?>
              <div class="card-body">
                <div class="d-flex gap-2">
                  <div class="star">
                    <i class="bx bxs-star"></i>
                  </div>
                  <p><?php echo $rating; ?>(120)</p>
                </div>

                <h5 class="card-title"><?php echo $nama; ?></h5>
                <div class="d-flex gap-2">
                  <p class="card-text">
                    Rp. <?php echo $after; ?>,-
                  </p>
                  <p class="card-text">
                    Rp. <?php echo $before; ?>,-
                  </p>
                </div>

                <a href="detail_product.php?idproduk=<?php echo $idproduk ?>" class="btn btn-primary">Buy now</a>
              </div>
            </div>
          </div>

          <?php
           }
          ?>

        </div>
      </div>
    </div>
  </div>

  <?php  include ('layouts/footer.php')?>