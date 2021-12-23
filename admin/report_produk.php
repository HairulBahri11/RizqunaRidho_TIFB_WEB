<?php include('layouts/session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<style>
    tr td {
        margin: 5px;
        padding: 5px;
        margin-bottom: 2rem;
    }

    @media print {
        @page {
            margin: 0;
        }

        body {
            padding: 2rem;
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
<div style="font-size: 25px;text-transform: uppercase;"><b>Data Produk</b></div>
<body>
    
    <br>
    <tr>
        <td> Tgl.Cetak Nota </td>
        <td> : </td>
        <td>
            <script>
                document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
            </script>
        </td>
    </tr>
    <br>
    <table class="table mb-5" border=1;>
        <thead>
            <tr class="mb-2">
                <th scope="col">No</th>
                <th scope="col">Gambar Produk</th>
                <th scope="col">Kategori</th>
                <th scope="col">nama Barang</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * from kategori k, produk p where k.idkategori=p.idkategori order by idproduk";
            $result = mysqli_query($con, $query);
            $no = 1;
            $idproduk = "";
            while ($row = mysqli_fetch_array($result)) {
                $idproduk = $row['idproduk'];
                $img  = $row['gambar'];
                $kategori = $row['kategori'];
                $nama  = $row['namaproduk'];
                $desk  = $row['deskripsi'];
                $harga  = $row['hargaafter'];


            ?>
                <tr>
                    <th scope="row" class="col-1"><?php echo $no; ?></th>
                    <td class="col-1">
                        <?php echo '<img src="../' . $img . '" alt="tidak ketemu" width="120px" height="110px">'; ?>
                    </td>
                    <td class="col-1"><?php echo $kategori; ?></td>
                    <td class="col-2"><?php echo $nama; ?></td>
                    <td class="col-3"><?php $num_char = 50;
                                        echo substr($desk, 0, $num_char) . '...'; ?></td>
                    <td class="col-1"><?php echo $harga; ?></td>






                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>