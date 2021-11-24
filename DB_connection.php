<?php
$dbcon = pg_connect("host='localhost' user='incheqsuser' password='Incheqs2008' dbname='UNIVERSITAS'");
  if ($dbcon) 
    {echo "Koneksi Database Sukses !!!";}
    else
    {echo "Koneksi Database Gagal !!!".pg_result_error();}
		{echo "</br>";}

$sql= "INSERT INTO mahasiswa (NIM,Nama,Umur,gender,Templa,Alamat)
VALUES ('00119','Junaidi Gahar','22','pria','Bandung','Jl. Gaian Kabel No.33 Jakarta Utara')";
$query = pg_query($dbcon,$sql);

	{
	$query =pg_query($dbcon,"select*from mahasiswa");
				if (!$query)
				die("DATABASE PGSQL cannot login !!!");
					while($mahasiswa=pg_fetch_array($query))
				{
					echo "</br>";
					echo "<tr>";
					echo "<td>".$mahasiswa['NIM']."</td>";
					echo "<td>".$mahasiswa['Nama']."</td>";
					echo "<td>".$mahasiswa['Umur']."</td>";
					echo "<td>".$mahasiswa['Gender']."</td>";
					echo "<td>".$mahasiswa['Templa']."</td>";
					echo "<td>".$mahasiswa['Alamat']."</td>";
					echo "</tr>";
					echo "</br>";
				}
	}



//if( $query ) {    
 //       header('Location: pendaftaran.php?status=sukses');
  //  } else {     
   //     header('Location: pendaftaran.php?status=gagal');
   // }

?>