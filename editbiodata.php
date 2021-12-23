<?php 
$title = "Edit Biodata";
include('layouts/header.php') 
?>


<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="background">
                <?php
                    $sesID = $_GET['userid'];
                    $result   = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM users WHERE userid = '$sesID'"));
                ?>
                <h3>Edit Biodata</h3>
                <hr>
                    <!-- content table  -->
                    <?php
                    //jika sudah mendapatkan parameter GET id dari URL
                    if (isset($_GET['userid'])) {
                        //membuat variabel $id untuk menyimpan id dari GET id di URL
                        $userid = $_GET['userid'];

                        //query ke database SELECT tabel dosen berdasarkan id = $id
                        $select = mysqli_query($con, "SELECT * FROM users WHERE userid='$userid'") or die(mysqli_error($con));

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
                    if (isset($_POST['insert'])) {
                        
                        $userid = $_GET['userid'];
                        $nama        = $_POST['nama'];
                        $email        = $_POST['email'];
                        $telpon        = $_POST['telpon'];
               

                        $sql = mysqli_query($con, "UPDATE users SET nama='$nama',email='$email',notelp='$telpon' WHERE userid=' $userid'") or die(mysqli_error($con));

                        if ($sql) {
                            echo '<script>alert("Berhasil menyimpan data."); document.location="profile.php";</script>';
                        } else {
                            echo '<div class="alert alert-warning">gagal melakukan proses edit data.</div>';
                        }
                    }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Telp</label>
                        <input type="text" class="form-control" name="telpon" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['notelp'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?php echo $data['email'] ?>">
                        <div id="emailHelp" class="form-text">mengubah Email berarti mengubah informasi login ke halaman website</div>
                    </div>
                    <button type="submit" name="insert" class="konfirmasi btn btn-sm btn-primary">Submit</button>
                </form>
                    
            </div>
        </div>
    </div>
</div>




<?php 
include('layouts/footer.php'); ?>