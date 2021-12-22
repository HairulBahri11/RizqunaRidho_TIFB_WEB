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
            <li class="nav-item">
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
            <li class="nav-item active">
                <a class="nav-link collapsed" href="kategori.php" >
                    <i class="fas fa-list"></i>
                    <span>Kategori</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="produk.php" >
                    <i class="fas fa-tshirt"></i>
                    <span>Produk</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="metode_pembayaran.php">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Metode Pembayaran</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="kelola_pesanan.php" >
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Kelola Pesanan</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Super Admin
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
                        <h1 class="h3 mb-0 text-gray-800">Semua Kategori</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="container mb-8">
                        <div class="row">

                            <div class="col-10">
                            <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-sm col-md-2 mt-5" name="tambah">Tambah kategori</button>
                                <table class="table mb-5">
                                    <thead>
                                        <tr class="mb-2">
                                            <th scope="col">No</th>
                                            <th scope="col">Kategori</th>
                                         
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // langkah pertama
                                        $batas = 5;
                                        $halaman = @$_GET['halaman'];
                                        if (empty($halaman)) {
                                            $posisi = 0;
                                            $halaman = 1;
                                        } else {
                                            $posisi = ($halaman - 1) * $batas;
                                        }
                                        $query = "SELECT * from kategori LIMIT $posisi, $batas";
                                        $result = mysqli_query($con, $query);
                                        $no = 1;
                                        if ($sesLvl == 1) {
                                            $dis = "";
                                        } else {
                                            $dis = "disabled";
                                        }
                                        $idkategori = "";
                                        while ($row = mysqli_fetch_array($result)) {
                                            $idkategori = $row['idkategori'];
                                          
                                            $kategori = $row['kategori'];
                                           

                                        ?>
                                            <tr>
                                                <th scope="row" class="col-1"><?php echo $no; ?></th>
                                                <td class="col-1"><?php echo $kategori; ?></td>
                                                

                                                <td class="col-2">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <a name="edit" href="edit_kategori.php?idkategori=<?php echo $idkategori ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        </div>
                                                        <div class="col-2">
                                                            <a href="hapus_kategori.php?idkategori=<?php echo $idkategori ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </td>



                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <?php

                                $query2 = mysqli_query($con, "select * from kategori");
                                $jmldata  = mysqli_num_rows($query2);
                                $jmlhalaman = ceil($jmldata / $batas);

                                ?>

                                <div class="container">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <?php
                                            for ($i = 1; $i <= $jmlhalaman; $i++)
                                                if ($i != $halaman) {
                                                    echo " <li class='page-item'><a class='page-link' href='kategori.php?halaman=$i'>$i</a></li>";
                                                } else {
                                                    echo "<b>$i</b> |";
                                                }
                                            ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white mt-5">
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

        <!-- Tambah data -->
        <?php
        if (isset($_POST['tambah'])) {
            
            $kategori = $_POST['kategori'];
            $sql = mysqli_query($con, "INSERT INTO kategori(kategori)
                VALUES('" . $kategori . "')");
            if($sql){
                echo '<script>alert("Berhasil menambahkan data."); document.location="kategori.php";</script>';
            }else{
                echo '<script>alert("gagal menambahkan data."); document.location="kategori.php";</script>';
            }
        }



        ?>

        <!-- input modal -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Produk</h4>
                    </div>

                    <div class="modal-body">
                        <form action="kategori.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                                
                                <input name="kategori" type="hidden" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <input name="kategori" type="text" class="form-control" required autofocus>
                            </div>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <input name="tambah" type="submit" class="btn btn-primary" value="Tambah">
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Edit modal -->

        <?php



        ?>
        <div id="myEdit<?php echo $no; ?>" class="modal fade" name="edit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Produk</h4>
                    </div>

                    <div class="modal-body">
                        <form action="produk.php?no=<?php echo $no; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input name="namaproduk" type="text" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <select name="idkategori" class="form-control">
                                    <option selected>Pilih Kategori</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input name="deskripsi" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Rating (1-5)</label>
                                <input name="rate" type="number" class="form-control" min="1" max="5" required>
                            </div>
                            <div class="form-group">
                                <label>Harga Sebelum Diskon</label>
                                <input name="hargabefore" type="number" class="form-control" value="<?php echo $hargabefore ?>">
                            </div>
                            <div class="form-group">
                                <label>Harga Setelah Diskon</label>
                                <input name="hargaafter" type="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input name="uploadgambar" type="file" class="form-control">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <input name="edit" type="submit" class="btn btn-primary" value="Edit">
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>