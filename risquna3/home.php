<?php
  $title = "Home";
  include('layouts/header.php') ?>

<div class="banner">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1 class="title">Collaboration with Popular Brands</h1>
        <a href="#" class="btn btn-white mt-4">Shop now</a>
      </div>
    </div>
  </div>
</div>

<div class="features">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="features1">
          <img src="Img/truck.png" alt="">
          <h4>Fast Shipping</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="features1">
          <img src="Img/dollar.png" alt="">
          <h4>Lowest Price</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="features1">
          <img src="Img/Group 46.png" alt="">
          <h4>Free return</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<hr>

<div class="collection">
  <div class="container">
    <div class="title">
      <div class="d-flex justify-content-between">
        <h3 class="mt-3">Explore Our Collection</h3>
        <a href="" class="btn btn-primary">See more</a>
      </div>
      <div class="image">
        <div class="row">
          <div class="col-md-3">
            <div class="card" style="background-image: url('Img/1.png');">
              <div class="card-body">
                <h4 class="card-title">Vile</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="background-image: url('Img/2.png');">
              <div class="card-body">
                <h4 class="card-title">Koko Shirt</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="background-image: url('Img/3.png');">
              <div class="card-body">
                <h4 class="card-title">Gamis</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="background-image: url('Img/4.png');">
              <div class="card-body">
                <h4 class="card-title">Kaftan</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="product">
  <div class="container">
    <div class="title">
      <h3 class="text-center">Our New Product</h3>
    </div>


    <div class="product-item">
      <div class="row">
        <?php
            $query = "SELECT * from produk";
            $result = mysqli_query($con, $query);
            $no = 1;

            while($row = mysqli_fetch_array($result)) {
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
                <p><?php echo $rating ?>(120)</p>
              </div>

              <h5 class="card-title"><?php echo $nama ?></h5>
              <div class="d-flex gap-2">
                <p class="card-text">
                  Rp. <?php echo $after ?>,-
                </p>
                <p class="card-text">
                  Rp. <?php echo $before ?>,-
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

<div class="container">
  <div class="partner">
    <img src="Img/partner.png" alt="">
  </div>
</div>

<?php include('layouts/footer.php') ?>