<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<script language="javascript">
		function pesan(){
	alert ("Masukkan Username & Password!")}
	</script>

<style type="text/css">
	div {
		padding-top: 150px;
	}
	td{
		text-align: center;
	}
	p{
		font-weight: bold;
	}
</style>
<body onLoad=pesan()>
	<form method="POST" action="logincek.php">
	<div align="center">
		<h2>BUKU TAMU</h2>
		<p>Login</p>
		<table>
		<tr><td>Username :</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr><td>Password : </td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr><td colspan="2"><input type="submit" name="tbllogin" value="Login"</td></tr>
		</table>
	
	
	</div>
</form>
</body>
</html>