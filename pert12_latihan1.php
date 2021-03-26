<?php 
	$con = mysqli_connect("localhost","root",""); 
	if (!$con) 
	 { 
	 die('Could not connect: ' . mysql_error()); 
	 } 
	mysqli_select_db( $con , "lat_dbase"); 
	$query_update = "UPDATE tbl_mhs SET Age = '36' WHERE FirstName = 'Karina' AND LastName = 'Suwandi'"; 
	$proses = mysqli_query($con, $query_update);

	mysqli_close($con); 

	echo "Data Berhasil Di Update";

?> 