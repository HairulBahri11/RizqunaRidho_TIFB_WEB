<?php 

$title = "Konfirmasi Pembayaran";
include('layouts/header.php');
$idcart = $_GET['idcart'];
$result   = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM cart WHERE idcart = '$idcart'"));

$check = array(
            " " => "-",
            ":" => "",
            "," => "",
            "." => "",
            "-" => "",
            "/" => "",
            "`" => "",
            "'" => "",
            '"' => ""
        );

if(isset($_POST['insert'])) {
    $pembayaran = $_POST['txt_pembayaran'];
    $id = $_POST['txt_id'];
    $rekening   = $_POST['txt_rek'];
    $tglbayar   = $_POST['txt_datebayar'];
    $foto       = $_FILES['buktibayar']['name'];
    $temp       = $_FILES['buktibayar']['tmp_name'];
    $foto_file  = strtolower(strtr($rekening, $check)).".jpg";

    $query = "INSERT INTO konfirmasi SET idcart='$idcart', pembayaran='$pembayaran', namarekening='$rekening', tglbayar='$tglbayar', buktibayar='$foto_file'";
    mysqli_query($con, "UPDATE cart SET status = 'WAITING CONFIRMATION' WHERE idcart = '$idcart'");
    copy($temp, "img/". $foto_file);

    $data = mysqli_query($con, $query);
    header('location: home.php');
}
?>

<div class="form">
    <div class="row align-items-center justify-content-center">
        <div class="col-6">
            <div class="card">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Kode Order</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $result['kodeorder']  ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Metode transfer yang tersedia</label>
                        <select class="form-select" aria-label="Default select example" name="txt_pembayaran">
                            <?php
                            $payment = "SELECT * from payment";
                            $result1 = mysqli_query($con, $payment);
                            while($row = mysqli_fetch_array($result1)) {
                            $metode  = $row['metode'];
                            $norek  = $row['norek'];

                             ?>
                            <option><?php echo '<p> ' . $metode .' | ' . $norek .' </p>';  ?></option>
                            <?php

                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Informasi Pembayaran</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="txt_rek" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Masukkan nama pemilik rekening sesuai bukti pembayaran</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Bayar</label>
                        <input type="date" class="form-control" id="exampleInputEmail1"  name="txt_datebayar" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Bukti Pembayaran</label>
                        <input type="file" class="form-control" name="buktibayar" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" name="insert" class="konfirmasi btn btn-sm btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>