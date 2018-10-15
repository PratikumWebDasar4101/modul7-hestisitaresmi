<?php
	session_start();
	require_once("db.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	

</head>
<body>
	<table border="1">
		<th>Data Mahasiswa</th>
		<th>Action</th>
	
		<?php
			$sql	= "SELECT * FROM mahasiswa";
			$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_assoc($result)) {
					# code...
					$nim = $row['nim'];
					echo "<tr>";
					echo "<td>";
					echo "Nim : ". $row['nim']."<br>";
					echo "Nama : ".$row['nama']."<br>";
					echo "Jenis Kelamin : ". $row['jeniskelamin']."<br>";
					echo "Program Studi : ". $row['prodi']."<br>";
					echo "Fakultas : ". $row['fakultas']."<br>";
					echo "Asal : ". $row['asal']."<br>";
					echo "Moto Hidup : ".$row['moto']."<br>"."<br>";
					echo "</td>";

					echo "<td>"."<a href='delete.php? nim='$nim'>Delete</a>"."</td>";


					echo "</tr>";

					
					
					

				}
			}else{
				echo "0 result";
			}
			mysqli_close($conn);

		?>
		
	</table>

</body>
</html>