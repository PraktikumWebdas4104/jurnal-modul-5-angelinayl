<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim" length="10"></td>
		</tr>

		
		<tr>
			<td><input type="submit" name="kirim"></td>
		</tr>		
	</table>
</form>

<?php 
if(isset($_POST['kirim'])){
	$komentar =$_POST['komentar'];

	if(str_word_count($komentar)<5){
	echo "Error, NIM Maksimal 10 Karakter";
	}else{
		echo str_word_count($komentar);

	}
}
	
	?>
