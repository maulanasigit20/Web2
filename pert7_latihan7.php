<html> 
<head> 
<title> Penggunaan Split </title> 
</head> 
<body> 
<?php 
	//info dari php.net  : This function was DEPRECATED in PHP 5.3.0, and REMOVED in PHP 7.0.0. | karena split dihapus di PHP7 maka kita ganti dengan explode()
	
	$tanggal = "17-05-2010"; 
	list($hari, $bulan, $tahun) = explode("-", $tanggal); 
	echo "Hari = $hari"; 
	echo "<br />"; 
	echo "Bulan = $bulan"; 
	echo "<br />"; 
	echo "Tahun = $tahun";
?> 
</body> 
</html> 
