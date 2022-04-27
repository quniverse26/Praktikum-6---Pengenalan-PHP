<html>
<head>
	<title> Hasil Ekseskusi Form Login </title>
</head>
<body>
	<h2> HI! </h2>
</body>
</html>

<?php
if (isset($_GET['nama']) AND isset($_GET['email'])) {
	$nama = $_GET['nama'];
	$email = $_GET['email'];
	$nama = htmlspecialchars($nama);
	$email = strip_tags($email);
} else {
	header("Location:nomor 1.php?error=variabel_belum_diset");
}

if (empty($nama)) {
	header("Location:nomor 1.php?error=nama_kosong");
} else {
	if (empty($email)) {
	header("Location:nomor 1.php?error=email_kosong");
	} else {
		echo "WELCOME, $nama <br>
		YOUR EMAIL ADDRESS IS $email <br>";
	}
}
?>
<?php
date_default_timezone_set('Asia/Jakarta');
$date = new DateTime('now');
echo $date->format('d-m-Y & H:i:s');
?>