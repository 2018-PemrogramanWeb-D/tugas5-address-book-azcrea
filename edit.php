<?php
include_once("conf.php");

if(isset($_POST['update']))
{
		$id = $_POST['id'];
		
		$nama=$_POST['nama'];
		$nrp=$_POST['nrp'];
		$email=$_POST['email'];
		
		$result = mysqli_query($mysqli, "UPDATE users SET name='$nama', nrp='$nrp', email='$email' WHERE id=$id");
		
		header("Location : idx.php")
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT" * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$nama = $user_data['nama'];
	$nrp = $user_data['nrp'];
	$email = $user_data['email'];
} 
?>
<html>
<head>
	<title> Edit Data Pengguna </title>
</head>

<body>
	<a href="idx.php">Halaman Utama</a>
	<br/>
	<br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?></td>
			</tr>
			<tr>
				<td>NRP</td>
				<td><input type="text" name="nrp" value=<?php echo $nrp;?></td>
			</tr>
			<tr>
				<td>Alamat E-mail</td>
				<td><input type="text" name="email" value=<?php echo $email;?></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echp $_GET['id'];?></td>
				<td><input type="submit" name="update" value="Update Data"></td>
			</tr>
		</table>
	</form>
</body>
</html>