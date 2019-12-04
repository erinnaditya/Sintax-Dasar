<html>
<head>
	<title>Konstanta</title>
</head>
<body>
		<h2>Demo Mendefinisikan Konstanta</h2>
		
		<?php
			// mendefinisikan konstanta
			define ('MAKSIMAL', 100);
			define ('NAMA_PERUSAHAAN', "PT. Multimedia Group");
			define ('PI', 3.14);
			
			// mencetak nilai konstanta ke layar browser
			echo MAKSIMAL . "<br/>";
			echo NAMA_PERUSAHAAN . "<br/>";

			
			// menggunakan konstanta dalam perhitungan
			$jarijari = 10;
			$luasLingkaran = PI * $jarijari * $jarijari;
			echo "Luas Lingkaran = " . $luasLingkaran;
		?>
</body>
</html>