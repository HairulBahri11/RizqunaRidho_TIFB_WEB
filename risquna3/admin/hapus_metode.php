<?php
require("../config.php");
// $email = $_GET['user_fullname'];


//jika benar mendapatkan GET id dari URL
if(isset($_GET['idpayment'])){
	//membuat variabel $id yang menyimpan nilai dari $_GET['id']
	$idpayment = $_GET['idpayment'];

	//melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
	$cek = mysqli_query($con, "SELECT * FROM payment WHERE idpayment='$idpayment'") or die(mysqli_error($con));

	//jika query menghasilkan nilai > 0 maka eksekusi script di bawah
	if(mysqli_num_rows($cek) > 0){
		//query ke database DELETE untuk menghapus data dengan kondisi id=$id
		$del = mysqli_query($con, "DELETE FROM payment WHERE idpayment='$idpayment'") or die(mysqli_error($con));
		if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="metode_pembayaran.php";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="metode_pembayaran.php";</script>';
		}
	}else{
		echo '<script>alert("data tidak ditemukan di database."); document.location="metode_pembayaran.php";</script>';
	}
}else{
	echo '<script>alert("halooo tidak ditemukan di database."); document.location="metode_pembayaran.php";</script>';
}




?>