<?php
		include("pert11_bukutamu_koneksi.php");
		$query=mysqli_query($koneksi,'select * from data_tamu');
		
		date_default_timezone_set('Asia/Jakarta');
		$tgl_now = date("d F Y H:i:s");
		echo "<table  border=0 cellspacing=0 cellpadding=0 align= center width = 830>
		<td> Data Record Buku Tamu </td>
		<td align= right>  Per $tgl_now </td>
	    </table>";
	    echo "<br>";

	    echo "<table  border=1 cellspacing=0 cellpadding=3 align= center width = 830>
          <tr align= center >
          <td width = 150> Nama </td>
          <td width = 120> No HP </td>
          <td width = 150> Email </td>
          <td width = 100> Tanggal </td>
          <td width = 300> Pesan </td>
          </tr>
          </table>";

		while($data=mysqli_fetch_array($query))
		{
		$nama = $data['nama'];
		$nohp= $data['nohp'];
		$email = $data['email'];
		$pesan = $data['pesan'];
		$tanggal = $data['tanggal'];
		
		echo "<table  border=0 cellspacing=0 cellpadding=3 align= center width = 830>
          <tr align= center>
          <td width = 150> $nama</td>
          <td width = 120> $nohp</td>
          <td width = 150> $email </td>
          <td width = 100> $tanggal </td>
          <td width = 300> $pesan </td>
          </tr>
          </table>";
      };
      echo "<br>";
       echo "<br>";
        echo "<br>";

      echo "<div align= center ><a href= pert11_bukutamu_form.php ><button>Input Data</button></a></div>";
?>

