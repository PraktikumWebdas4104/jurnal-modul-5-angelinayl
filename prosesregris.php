<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim" length="10"></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length="25"></td>
		</tr>

		<tr>
			<td>E-mail</td>
			<td>:</td>
			<td><input type="email" name="email"></td>
		</tr>

		<tr>
			<td><input type="submit" name="kirim"></td>
		</tr>		
	</table>
</form>

<?php 
error_reporting(0);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "daftarmahasiswa";

	$conn=mysqli_connect($host, $user, $pass, $database);

	if (isset($_POST['kirim'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];

		if (strlen($nim)==10) {
				if (strlen($nama)<25) {
					if (strpos($email, "@gmail.com")) {
						$qry = mysqli_query($conn, "INSERT INTO `mahasiswa`(`nim`, `nama`, `email`)  
									VALUES  ('$nim', '$nama', '$email')");
						
						echo "Regristrasi Berhasil";
					}else{
						echo "Regristrasi Gagal";
					}
			}else{
				echo "Regristrasi Gagal";
			}
			}else{
				echo "Regristrasi Gagal";
			}
	
	}		
?>
