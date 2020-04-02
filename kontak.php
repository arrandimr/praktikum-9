<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style type="text/css">
	div {
		padding-top: 20px;
	}
</style>
<body>
	<form method="POST" action="simpan_kontak.php">
	<div align="center">
		<table>
		<tr><td colspan="3" align="center"><h2>BUKU TAMU</h2></td></tr>
		<tr>
			<td>Nama</td>
			<td> : </td>
			<td><input type="text" name="nama"></td>
			</tr>
		<tr>
			<td>Jenis Kelamin </td>
			<td> : </td>
			<td>
            <select name="jkel" id="jkel">
              <option>Laki - laki</option>
              <option>Perempuan</option>
            </select>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td> : </td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td> : </td>
			<td><input type="textarea" name="alamat"></td>
		</tr>
		<tr>
			<td>Kota</td>
			<td> : </td>
			<td><input type="text" name="kota"></td>
		</tr>
		<tr>
			<td>Pesan</td>
			<td> : </td>
			<td><input type="textarea" name="pesan"></td>
		</tr>
			<tr>
			<td colspan="3" align="center"><input type="submit" name="tblsimpan" value="Simpan"</td></tr>
		</table>
	
	
	</div>
</form>
</body>
</html>