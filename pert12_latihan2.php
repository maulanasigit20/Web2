<?php 
	$con = mysqli_connect("localhost","root",""); 
	if (!$con) 
	 { 
	 die('Could not connect: ' . mysqli_error()); 
	 } 
	mysqli_select_db($con,"lat_dbase"); 
	$sql = "DELETE FROM tbl_mhs WHERE LastName ='Prabowo'"; 
	$proses = mysqli_query($con ,$sql);
	if ($proses) {
		echo "Data berhasil di Delete";
	}
?> 