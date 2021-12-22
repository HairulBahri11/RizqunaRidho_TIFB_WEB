<?php
require("../config.php");
// $email = $_GET['user_fullname'];
if(isset($_GET['idkategori'])){
	//membuat variabel $id yang menyimpan nilai dari $_GET['id']
	$idkategori = $_GET['idkategori'];

	//melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
	$cek1 = mysqli_query($con, "SELECT * FROM kategori WHERE idkategori='$idkategori'") or die(mysqli_error($con));

	//jika query menghasilkan nilai > 0 maka eksekusi script di bawah
	if(mysqli_num_rows($cek1) > 0){
		//query ke database DELETE untuk menghapus data dengan kondisi id=$id
		$del1 = mysqli_query($con, "DELETE FROM kategori WHERE idkategori='$idkategori'") or die(mysqli_error($con));
		if($del1){
			echo '<script>alert("Berhasil menghapus data."); document.location="kategori.php";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="kategori.php";</script>';
		}
	}else{
		echo '<script>alert("data tidak ditemukan di database."); document.location="kategori.php";</script>';
	}
}else{
	echo '<script>alert("halooo tidak ditemukan di database."); document.location="kategori.php";</script>';
}

?>