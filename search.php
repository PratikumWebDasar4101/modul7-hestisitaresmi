<?php
	session_start();
	require_once "db.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form action="cari.php">
			<tr>
				<th>Nama</th>
				<th>Nim</th>
				<th>Aksi</th>
				
			</tr>
			<?php
				if(mysqli_num_row($result) > 0)


			?>
		</form>
	</table>

</body>
</html>