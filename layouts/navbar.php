  <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">
          <a class="navbar-brand" href="home.php">RR Store</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
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
                      <a class="nav-link active" aria-current="page" href="keranjang.php">
                          <i class="bx bx-cart"></i>
                          <span class="badge">
                            <?php
                                error_reporting(0);
                                $cart = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM cart WHERE userid = '$_SESSION[userid]' AND status = 'INCART'"));
                                echo mysqli_num_rows(mysqli_query($con, "SELECT * FROM cart_detail WHERE idcart = '$cart[idcart]'"));
                            ?>
                          </span>
                      </a>
                  </li>
                  <li class="nav-item">

                      <div class="dropdown">
                          <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=580&q=80"
                                  alt="">
                              <?php echo $sesName ?>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="pesanansaya.php">Pesanan Saya</a>
                              <a class="dropdown-item" href="profile.php">Profile</a>
                              <a class="dropdown-item" href="logout.php">Logout</a>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
  </nav>