<?php
//membuat variabel error
if(isset($_GET['error'])) {
	$error = $_GET['error'];
} else {
	$error = "";
}

//menyiapkan pesan kesalahan
$pesan = "";
if ($error=="variabel_belum_diset") {
	$pesan = "SORRY, YOU CAN'T ACCESS THIS SITE!";
}
else if ($error=="nama_kosong") {
	$pesan = "SORRY, YOU MUST FILL YOUR NAME!";
}
else if  ($error=="email_kosong") {
	$pesan = "SORRY, YOU MUST FILL YOUR EMAIL!";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Soal Nomor 1 - Form Login </title>
</head>
<body>
	<center>
		<h1> FORM LOGIN </h1>
	</center>
	<?php
	echo $pesan;
	?>
	<form method="GET" action="nomor 1.1.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="130"> Nama </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130"> Email </td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>