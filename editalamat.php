<?php 
$title = "Edit Alamat";
include('layouts/header.php') 
?>


<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="background">
                <h3>edit Alamat</h3>
                <hr>
                    <!-- content table  -->

                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
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