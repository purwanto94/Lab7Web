<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PHP Dasar</title>
	</head>
	<body>
		<h2>Form Input</h2>
		<form method="post">
			<ul>
				<li>
					<label for="nama">Nama: </label>
					<input type="text" name="nama">
				</li>
				<li>
					<label for="tanggal">Tanggal Lahir: </label>
					<input type="date" name="tanggal">
				</li>
				<li>
					<label for="pekerjaan">Pekerjaan: </label>
					<select id="pekerjaan" name="pekerjaan">
						<option value="karyawan">Karyawan</option>
						<option value="pengusaha">Pengusaha</option>
						<option value="pengangguran">Pengangguran</option>
					</select>
				</li>
				<input type="submit" value="Kirim">
			</ul>
		</form>
		<h1>Biodata</h1>
		<ul>
			<li>Nama: <?php echo $_POST['nama']; ?></li>
            <li>Tanggal Lahir: <?php echo $_POST['tanggal']; ?></li>
			<li>Usia: 
				<?php
					$lahir = $_POST['tanggal'];
					$umur = (date('Y') - date('Y', strtotime($lahir)));
					echo $umur;
					?>
			</li>
			<li>Pekerjaan: <?php echo $_POST['pekerjaan']; ?></li>
			<li>Gaji: 
				<?php
					$job = $_POST['pekerjaan'];
					if ($job == "karyawan") {
					 echo "Rp. 6.000.000";
					} elseif ($job == "pengusaha") {
					 echo "Rp. 100.000.000";
					} else {
					 echo "Rp. 0";
					}
				?>
			</li>
		</ul>
	</body>
</html>