<html>
<head>
	<title>Tambahkan Pengguna </title>
</head>

<body>
	<a href = 'idx.php'> Kembali ke Halaman Utama </a>
	<br/>
	<br/>
	
	<form action="tambah.php"	method="post" name="form">
		<table width = "50%" border ="0">
			<tr>
				<td> Nama </td>
				<td><input type="text" name="nama"</td>
			</tr>
			<tr>
				<td> NRP </td>
				<td><input type="text" name="nrp"</td>
			</tr>
			<tr>
				<td> Alamat E-mail </td>
				<td><input type="text" name="email"</td>
			</tr>
			<tr><td></td>
				<td><input type="submit" name="Submit" value="Tambah Pengguna"></td>
			</tr>
		</table>
	</form>
	
	<?php
	
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$nrp = $_POST['nrp'];
		$email = $_POST['email'];
		
		include_once("conf.php");
		
		$result = mysqli_query($mysqli, "UPDATE users SET name='$nama', nrp='$nrp', email='$email' WHERE id=$id");
		
		echo "User berhasil ditambahkan ! <a href='idx.php'>Lihat Pengguna</a>";
	}
	?>
</body>
</html>
