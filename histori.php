<?php 

$title = "Histori";
include('layouts/header.php') 

?>

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="background">
                <h3>Histori Pesanan</h3>
                <hr>
                    <!-- content table  -->
                    <table class="table mt-5 mb-5">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Order</th>
                            <th scope="col">Tanggal Order</th>
                            <th scope="col">Total belanja</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $tampil = mysqli_query($con, "SELECT * from cart WHERE userid = '$sesID' AND status = 'COMPLATE' ");
                        
                        $no = 1;
                        while($row  = mysqli_fetch_array($tampil)) {
                        $idcart       = $row['idcart'];
                        $kode       = $row['kodeorder'];
                        $tglbelanja = $row['tglbelanja'];
                        $total      = $row['totalbelanja'];
                        $status     = $row['status'];
                        ?>
                        <tr>
                            <td scope="col"><?php echo $no; ?></td>
                            <td scope="col"><a href="detailpesanan.php?idcart=<?php echo $idcart ?>"><?= $kode ?></td>
                            <td scope="col"><?php echo $tglbelanja; ?></td>
                            <td scope="col">Rp <?php echo $total; ?>,-</td>
                            <td scope="col" class="status"><?php echo $status; ?></td>
                        </tr>
                        <?php 
                        $no++;
                        }
                        ?>    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<?php 


include('layouts/footer.php'); ?>