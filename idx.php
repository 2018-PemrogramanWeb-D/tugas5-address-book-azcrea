<?php
include_once("conf.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id ASC");
?>

<html>
<head>
	<title>Halaman Utama</title>
</head>

<body>
<a href = "tambah.php">Tambah Pengguna</a>
<br/>
<br/>

	<table width = '100%' border = 1>
	
	<tr>
		<th>Nama</th>
		<th>NRP</th>
		<th>Alamat E-mail</th>
		<th>Update</th>
	</tr>
	
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['nama']."</td>";
		echo "<td>".$user_data['nrp']."</td>";
		echo "<td>".$user_data['email']."</td>"
		echo "<td><a href='edit.php?id=$user_data[id]'>Edit Data</a> | <a href ='hapus.php?id=$user_data[id]'>Hapus Data</a></td></tr>"
	}
	?>
	</table>
</body>	
</html>
