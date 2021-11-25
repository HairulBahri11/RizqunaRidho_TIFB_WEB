<?php
require 'config.php';
    session_start();
    // if(isset($_SESSION['isLogin'])){
    //     echo "halo lagi, ".$_SESSION['user']['nama'];
    // }else {
    //     echo 'LOGIN DULU GAN <a href="login.php">login</a>';        
    // }

  
    
      if(!isset($_SESSION['isLogin'])) {
        header("location: login.php");
      }else{

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
  <link rel="stylesheet" href="style.css">

  <title>Home</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand" href="#">RR Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex mx-auto">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search your favorite item . . ."
              aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">
              <i class="bx bx-search-alt-2"></i>
            </span>
          </div>
        </form>
        <ul class="navbar-nav align-items-center gap-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="bx bx-cart"></i>
              <span class="badge">
                2
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <img
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=580&q=80"
                alt="">
                <?php
               
                echo $_SESSION['user']['nama'];
                
                ?>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

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

      <?php 
      $q1 = "SELECT * from produk";
      $query = mysqli_query($con,$q1);
    
      $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    //    while($data['idproduk']){
        
    //     $data['idproduk']++;
    //     echo "'.$data[idproduk]++ .'";
    // }
        
          
      ?>
      <div class="product-item">
        <div class="row">
        
        <?php foreach($result as $result) : ?>
          <div class="col-md-3">
            <div class="card">
              <img src="<?php echo $result['gambar'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="d-flex gap-2">
                  <div class="star">
                    <i class="bx bxs-star"></i>
                  </div>
                  <p><?php echo $result['rating'] ?></p>
                </div>
               
                <h5 class="card-title"><?php echo $result['namaproduk'] ?></h5>
                <div class="d-flex gap-2">
                  <p class="card-text">
                  <?php echo "Rp.". number_format($result['hargaafter']) ?>
                  </p>
                  <p class="card-text">
                  <?php echo $result['hargabefore'] ?>
                  </p>
                </div>

                <a href="detail_product.php?idproduk=<?php echo $result['idproduk']; ?>&idkategori=<?php echo $result['idkategori']; ?>" class="btn btn-primary">Buy now</a>
              </div>
            </div>
          </div>
          
          <?php endforeach; ?>

         
          <!-- <div class="col-md-3">
            <div class="card">
              <img src="Img/product/item-2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="d-flex gap-2">
                  <div class="star">
                    <i class="bx bxs-star"></i>
                  </div>
                  <p>4.8(120)</p>
                </div>

                <h5 class="card-title">Voal Basic - Navy</h5>
                <div class="d-flex gap-2">
                  <p class="card-text">
                    Rp. 30.00,-
                  </p>
                  <p class="card-text">
                    Rp. 30.00,-
                  </p>
                </div>

                <a href="#" class="btn btn-primary">Buy now</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="Img/product/item-3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="d-flex gap-2">
                  <div class="star">
                    <i class="bx bxs-star"></i>
                  </div>
                  <p>4.8(120)</p>
                </div>

                <h5 class="card-title">Voal Basic - Navy</h5>
                <div class="d-flex gap-2">
                  <p class="card-text">
                    Rp. 30.00,-
                  </p>
                  <p class="card-text">
                    Rp. 30.00,-
                  </p>
                </div>

                <a href="#" class="btn btn-primary">Buy now</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="Img/product/item-4.png" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="d-flex gap-2">
                  <div class="star">
                    <i class="bx bxs-star"></i>
                  </div>
                  <p>4.8(120)</p>
                </div>

                <h5 class="card-title">Voal Basic - Navy</h5>
                <div class="d-flex gap-2">
                  <p class="card-text">
                    Rp. 30.00,-
                  </p>
                  <p class="card-text">
                    Rp. 30.00,-
                  </p>
                </div>

                <a href="#" class="btn btn-primary">Buy now</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="Img/product/item-3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="d-flex gap-2">
                  <div class="star">
                    <i class="bx bxs-star"></i>
                  </div>
                  <p>4.8(120)</p>
                </div>

                <h5 class="card-title">Voal Basic - Navy</h5>
                <div class="d-flex gap-2">
                  <p class="card-text">
                    Rp. 30.00,-
                  </p>
                  <p class="card-text">
                    Rp. 30.00,-
                  </p>
                </div>

                <a href="#" class="btn btn-primary">Buy now</a>
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="partner">
      <img src="Img/partner.png" alt="">
    </div>
  </div>

  <hr>

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Risquna Ridho Store</h3>
          <p>We kaboom your beauty holiday<br>instantly and memorable.</p>
        </div>
        <div class="col-md-2 ps-4">
          <h4>Product</h4>
          <a href="">Veil</a>
          <a href="">Koko Shirt</a>
          <a href="">Gamis</a>
        </div>
        <div class="col-md-2">
          <h4>explore us</h4>
          <a href="">Our Careers</a>
          <a href="">Privacy</a>
          <a href="">Terms & Conditions</a>
        </div>
        <div class="col-md-4 ps-4">
          <h4>Connect us</h4>
          <a href="">customer@risquna.com</a>
          <a href="">021 - 2208 - 1996</a>
          <a href="">Padjarakan, Probolinggo, Jawa Timur</a>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php 
      }
?>