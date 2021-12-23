<?php 
$title = "Edit Alamat";
include('layouts/header.php') 
?>
 <?php
                    $sesID = $_GET['userid'];
                    $result   = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM users WHERE userid = '$sesID'"));
                ?>
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
                        $alamat        = $_POST['alamat'];
                     
               

                        $sql = mysqli_query($con, "UPDATE users SET alamat='$alamat' WHERE userid=' $userid'") or die(mysqli_error($con));

                        if ($sql) {
                            echo '<script>alert("Berhasil menyimpan data."); document.location="profile.php";</script>';
                        } else {
                            echo '<div class="alert alert-warning">gagal melakukan proses edit data.</div>';
                        }
                    }
                    ?>
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="background">
                <h3>Edit Alamat</h3>
                <hr>
                    <!-- content table  -->

                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control" name="alamat" aria-describedby="emailHelp" value="<?php echo $data['alamat'] ?>">
                        <div id="emailHelp" class="form-text">Pastikan isi alamat dengan benar</div>
                    </div>
                    <button type="submit" name="insert" class="konfirmasi btn btn-sm btn-primary">Submit</button>
                </form>
                    
            </div>
        </div>
    </div>
</div>




<?php 
include('layouts/footer.php'); ?>