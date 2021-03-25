<?php
	// koneksi dengan database mysql
	include("pert11_bukutamu_koneksi.php");
	
	// mengambil nilai dari form input buku tamu
	$nama=$_POST['nama'];
	$nohp=$_POST['nohp'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];
	$tanggal = date("Y-m-d");
	$sql="INSERT INTO data_tamu(nama,nohp,email,pesan,tanggal) values ('$nama','$nohp','$email','$pesan','$tanggal')";
	mysqli_query($koneksi,$sql) or die (mysqli_error());
	header('location:pert11_bukutamu_form.php');
?>