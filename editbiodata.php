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
                <h3>edit Biodata</h3>
                <hr>
                    <!-- content table  -->

                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Telp</label>
                        <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
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