<?php include('layouts/session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<style>
    tr td {
        margin: 5px;
        padding: 5px;
    }

    @media print {
        @page {
            margin: 0;
        }

        body {
            margin: 1.6cm;
        }

    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <title>Document</title>
    <script type='text/javascript'>
        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth();
        var thisDay = date.getDay(),
            thisDay = myDays[thisDay];
        var yy = date.getYear();
        var year = (yy < 1000) ? yy + 1900 : yy;
       
    </script>
</head>
<?php
$idcart = $_GET['idcart'];
$result   = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM cart WHERE idcart = '$idcart'"));
$konfirmasi = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM konfirmasi WHERE idcart = '$idcart'"));
$user     = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM users WHERE userid = '$result[userid]'"));
?>

<body style="border: 2px solid; padding: 2rem;">
    <h1>Pesanan <?php echo $result['kodeorder']  ?></h1>
    <div class="kepala" style="margin-bottom : 15px;">


        <tr>
            <td>Pemesan</td>
            <td> : </td>
            <td><?php echo $user['nama'] ?></td>

        </tr>
        <br>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td><?php echo $user['alamat'] ?></td>
        </tr>
        <br>
        <td>Tgl.Pesan</td>
        <td> : </td>
        <td><?php echo $result['tglbelanja'] ?></td>
        </tr>
        <br>
        <tr>
            <td> Total Belanja </td>
            <td> : </td>
            <td><?php echo $result['totalbelanja'] ?></td>
        </tr>
        <br>
        <tr>
            <td> Tgl.Cetak Nota </td>
            <td> : </td>
            <td> <script>
                 document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
            </script></td>
        </tr>
    </div>



    <table border="2">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Gambar</td>
                <td>Qty</td>
                <td>TotalHarga</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $items = mysqli_query($con, "SELECT * FROM cart_detail WHERE idcart = '$idcart'");
            while ($data = mysqli_fetch_array($items)) {
                $products = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM produk WHERE idproduk = '$data[idproduk]'"));
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td> <?= $products['namaproduk'] ?></td>
                    <td><img src="../<?= $products['gambar'] ?>" alt="" width="70px" height="60px"></td>
                    <td><?= $data['qty'] ?></td>
                    <td> Rp.<?= $products['hargaafter'] * $data['qty'] ?>,-</td>
                </tr>
        </tbody>
        <script>
            window.print();
        </script>
    <?php } ?>
    </table>
</body>

</html>