<?php
require 'config.php';
session_start();
// if(isset($_SESSION['isLogin'])){
//     echo "halo lagi, ".$_SESSION['user']['nama'];
// }else {
//     echo 'LOGIN DULU GAN <a href="login.php">login</a>';        
// }



if (!isset($_SESSION['isLogin'])) {
    header("location: login.php");
} else {

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
       
        <title>Keranjang anda</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="#">RR Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex mx-auto">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search your favorite item . . ." aria-label="Recipient's username" aria-describedby="basic-addon2">
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
                                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=580&q=80" alt="">
                               
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="cart">
            <div class="container">
                <div class="row gap-5">
                    <div class="col-md-6">
                        <h3>
                            Your cart
                        </h3>
                        <hr>
                        <div class="list-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="Img/product/item-1.png" alt="" width="71px" height="60px">
                                </div>
                                <div class="col-md-7">
                                    <div class="nama-harga">
                                        <p class="nama-item">Voal Basic - Navy</p>
                                        <p class="harga">Rp. 30.000</p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="add">
                                        <div class="d-flex gap-3">
                                            <a href="" class="btn btn-primary bx bx-plus"></a>
                                            <p>2</p>
                                            <a href="" class="btn btn-primary  bx bx-plus"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="Img/product/item-1.png" alt="" width="71px" height="60px">
                                </div>
                                <div class="col-md-7">
                                    <div class="nama-harga">
                                        <p class="nama-item">Voal Basic - Navy</p>
                                        <p class="harga">Rp. 30.000</p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="add">
                                        <div class="d-flex gap-3">
                                            <a href="" class="btn btn-primary bx bx-plus"></a>
                                            <p>2</p>
                                            <a href="" class="btn btn-primary  bx bx-plus"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="Img/product/item-1.png" alt="" width="71px" height="60px">
                                </div>
                                <div class="col-md-7">
                                    <div class="nama-harga">
                                        <p class="nama-item">Voal Basic - Navy</p>
                                        <p class="harga">Rp. 30.000</p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="add">
                                        <div class="d-flex gap-3">
                                            <a href="" class="btn btn-primary bx bx-plus"></a>
                                            <p>2</p>
                                            <a href="" class="btn btn-primary  bx bx-plus"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="Img/product/item-1.png" alt="" width="71px" height="60px">
                                </div>
                                <div class="col-md-7">
                                    <div class="nama-harga">
                                        <p class="nama-item">Voal Basic - Navy</p>
                                        <p class="harga">Rp. 30.000</p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="add">
                                        <div class="d-flex gap-3">
                                            <a href="" class="btn btn-primary bx bx-plus"></a>
                                            <p>2</p>
                                            <a href="" class="btn btn-primary  bx bx-plus"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="summary">
                            <h4>Summary</h4>
                            <div class="d-flex gap-5">
                                <p>Total Price (5 items)</p>
                                <p class="total">Rp.350.000,-</p>
                            </div>
                            <hr class="garis">
                            <div class="d-flex gap-5">
                                <h4>Total Price</h4>
                                <h4 class="total-price">Rp.350.000,-</h4>
                            </div>
                            <a href="" class="btn btn-primary">Checkout</a>
                        </div>
                    </div>
                </div>
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