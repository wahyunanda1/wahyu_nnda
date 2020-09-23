 <?php

	$host='localhost';
	$user='root';
	$pass='';
	$db='db_invensekolah';
	$query=mysqli_connect($host,$user,$pass,$db);
	if($query) {
		echo "";
	}else{
		echo "koneksi Gagal";
	}

?> 