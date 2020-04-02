<?php

	if (empty($_POST['username'] && $_POST['password'])){
	header("location:index.php");
	} else {
	
	include "koneksi.php";
	$sql = "SELECT * FROM login WHERE username='".$_POST['username']."' and password='".$_POST['password']."';";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
				header("location:cetak.php");
		} 
	}else{
		include "index.php";
	}
	}
	mysqli_close($conn);
?>