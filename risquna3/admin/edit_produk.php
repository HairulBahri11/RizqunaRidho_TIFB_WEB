<?php

include ('layouts/session.php');

?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Risquna Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kelola Toko
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="kategori.php" >
                    <i class="fas fa-list"></i>
                    <span>Kategori</span>
                </a>

            </li>

            <li class="nav-item active">
                <a class="nav-link collapsed" href="produk.php" >
                    <i class="fas fa-tshirt"></i>
                    <span>Produk</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="metode_pembayaran.php" >
                    <i class="fas fa-dollar-sign"></i>
                    <span>Metode Pembayaran</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="kelola_pesanan.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Kelola Pesanan</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               <span>Super Admin</span> 
            </div>

            <!-- Nav Item - Pages Collapse Menu -->


            <li class="nav-item">
                <a class="nav-link collapsed" href="daftar_pelanggan.php">
                    <i class="fas fa-user-friends"></i>
                    <span>Daftar Pelanggan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="kelola_petugas.php">
                <i class="fas fa-user"></i>
                    <input type="button"class="btn btn-secondary btn-sm" style="padding: 5px;" value="Kelola Petugas" <?php echo $dis; ?>>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $sesPetugas; ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container mb-7">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Produk</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <?php
                    //jika sudah mendapatkan parameter GET id dari URL
                    if (isset($_GET['idproduk'])) {
                        //membuat variabel $id untuk menyimpan id dari GET id di URL
                        $idproduk = $_GET['idproduk'];

                        //query ke database SELECT tabel dosen berdasarkan id = $id
                        $select = mysqli_query($con, "SELECT * FROM produk WHERE idproduk='$idproduk'") or die(mysqli_error($con));

                        //jika hasil query = 0 maka muncul pesan error
                        if (mysqli_num_rows($select) == 0) {
                            echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
                            exit();
                            //jika hasil query > 0
                        } else {
                            //membuat variabel $data dan menyimpan data row dari query
                            $data = mysqli_fetch_assoc($select);
                        }
                    }
                    //jika tombol simpan di tekan/klik
                    if (isset($_POST['submit'])) {
                        
                        $idproduk = $_GET['idproduk'];
                        $nama        = $_POST['namaproduk'];
                        $idkategori        = $_POST['idkategori'];
                        $deskripsi        = $_POST['deskripsi'];
                        $rate        = $_POST['rate'];
                        $hargabefore        = $_POST['hargabefore'];
                        $hargaafter        = $_POST['hargaafter'];
                        $stok        = $_POST['stok'];
                        $namaGambar = "img/inputGambar/" . $_FILES['uploadgambar']['name'];
                        $path = $_FILES['uploadgambar']['tmp_name'];
                        move_uploaded_file($path, "../" . $namaGambar);


                        $sql = mysqli_query($con, "UPDATE produk SET idkategori='$idkategori', namaproduk='$nama' , gambar='$namaGambar', deskripsi='$deskripsi' , rating='$rate' , hargabefore='$hargabefore' , hargaafter='$hargaafter' , stok='$stok' WHERE idproduk=' $idproduk'") or die(mysqli_error($con));

                        if ($sql) {
                            echo '<script>alert("Berhasil menyimpan data."); document.location="produk.php";</script>';
                        } else {
                            echo '<div class="alert alert-warning">gagal melakukan proses edit data.</div>';
                        }
                    }
                    ?>
                    <!-- Content Row -->
                    <div class="container mb-8">
                        <div class="row">
                            <div class="col-md-5">
                                <form action="edit_produk.php?idproduk=<?php echo $idproduk?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input name="namaproduk" type="text" class="form-control" required autofocus value="<?php echo $data['namaproduk'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Kategori</label>
                                        <select name="idkategori" class="form-control">
                                            <option selected value="<?php echo $data['idkategori']; ?>"><?php echo $data['idkategori']; ?></option>
                                            <?php
                                            $q = mysqli_query($con, "select * from kategori");
                                            while ($dt = mysqli_fetch_assoc($q)) {
                                                echo '<option value="' . $data['idkategori'] . '">', $data['idkategori'], " - ", $dt['kategori'], '</option>';
                                            }
                                            ?>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <input name="deskripsi" type="text" class="form-control" required value="<?php echo $data['deskripsi'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Rating (1-5)</label>
                                        <input name="rate" type="number" class="form-control" min="1" max="5" required value="<?php echo $data['rating'] ?>">
                                    </div>
                            </div>
                            <div class="col-md-5">

                                <div class="form-group">
                                    <label>Harga Sebelum Diskon</label>
                                    <input name="hargabefore" type="number" class="form-control" value="<?php echo $data['hargabefore'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Harga Setelah Diskon</label>
                                    <input name="hargaafter" type="number" class="form-control" value="<?php echo $data['hargaafter'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input name="uploadgambar" type="file" class="form-control" required>

                                </div>
                                <img src="../<?php echo $data['gambar'] ?>" alt="...">
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input name="stok" type="number" class="form-control" value="<?php echo $data['stok'] ?>">
                                </div>
                                <div class="mb-5">
                                    <input name="submit" type="submit" class="btn btn-primary" value="Simpan">
                                </div>

                            </div>

                        </div>



                        </form>

                    </div>

                </div>

            </div>

            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Risquna Store</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>