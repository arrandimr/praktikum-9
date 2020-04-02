<?php 

include "admin/koneksi.php";

$vnama=$_POST['nama']; $vjkel=$_POST['jkel']; $vemail=$_POST['email']; $valamat=$_POST['alamat']; $vkota=$_POST['kota']; $vpesan=$_POST['pesan']; 

$sql = "insert into kontak (nama,jkel,email,alamat,kota,pesan) values ('".$vnama."', '".$vjkel."','".$vemail."','".$valamat."','".$vkota."','".$vpesan."')";

if (mysqli_query($conn, $sql)){} 
else {
	echo "Error : ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
header("location:kontak.php");

?> 
 