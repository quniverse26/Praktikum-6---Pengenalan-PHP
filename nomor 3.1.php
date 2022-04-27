<html>
<head>
	<title> Hasil Ekseskusi Form Biodata </title>
</head>
<body>
	<h2> Hasil Isian Form Biodata </h2>
</body>
</html>

<?php
if (isset($_GET['nama']) AND isset($_GET['email'])) {
	$nama = $_GET['nama'];
	$email = $_GET['email'];
	$alamat = $_GET['alamat'];
	$hobi = $_GET['hobi'];
} else {
	die("Maaf, Anda harus mengakses halaman ini dari form .html");
}
if (empty($nama)) {
	die("Maaf, Anda harus mengisi nama");
} else {
	if (is_numeric($nama)) {
		die("Maaf, nama harus berupa huruf");
	} else {
		echo "Nama: $nama <br> Email: $email <br> Alamat: $alamat <br> Hobi:$hobi";
	}	
}
?>