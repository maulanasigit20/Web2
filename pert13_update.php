<?php
	include "Pert13_koneksi.php";
	$id = $_POST['id'];
	$judul = $_POST['judul']; 
	$penulis = $_POST['penulis']; 
	$lead = $_POST['lead']; 
	$isi = $_POST['content']; 
	$time = date("Y-m-d");
	//$lead = str_replace("\r\n","<br>",$lead);
	//$content= str_replace("\r\n","<br>",$content);
	$update = "UPDATE articles SET judul='$judul', penulis='$penulis', 
	lead='$lead', content='$isi', waktu='$time' WHERE id ='$id'"; 
	$hasil=mysqli_query($con,$update); 
	if ($hasil) { 
	 echo "Artikel berhasil di update<br>"; 
	 echo "<a href=\"Pert13_tampil.php\">List</a>"; 
	} else { 
	 echo "Artikel gagal di update"; 
} 
?>