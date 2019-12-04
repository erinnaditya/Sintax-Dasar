<?php
	// Menangani form dari file yang sama
	if (isset ($_POST["btnSubmit"])) {
		$bulan = $_POST["bulan"];
		switch ($bulan) {
			case 1: $jumlah = 31; break;
			case 2: $jumlah = 28; break;
			case 3: $jumlah = 31; break;
			case 4: $jumlah = 30; break;
			case 5: $jumlah = 31; break;
			case 6: $jumlah = 30; break;
			case 7: $jumlah = 31; break;
			case 8: $jumlah = 31; break;
			case 9: $jumlah = 30; break;
			case 10: $jumlah = 31; break;
			case 11: $jumlah = 30; break;
			case 12: $jumlah = 31; break;
		default:
			echo "Anda belum memilih bulan.";
			exit();
		}
		echo "Jumlah hari = $jumlah";
		
	}
?>

<html>
<body>	
	<input type="submit" form action="SwitchJumlahHari.php" method="POST">
		</form>
</body>
</html>
