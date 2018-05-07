<!DOCTYPE html>
<html>
<head>
	<title>data mahasiswa</title>
</head>
<body>
  <h1>data mahasiswa uin</h1>
  <table width="50%" border="1">
  <tr>
	  <th>no</th>
	  <th>nim</th>
	  <th>nama</th>
	  <th>jk</th>
	  <th>jurusan</th>
	  <th>usia</th>
	  <th>edit</th>
  </tr>
  <?php
  		include 'koneksi.php';
  		$sql = mysqli_query($konek,"SELECT  * from mahasiswa Order By usia DESC");
  		$nomor=1;
  		while ($data = mysqli_fetch_array($sql)){
  			echo "<tr>
  			<td>$nomor</td>
  			<td>$data[nim]</td>
  			<td>$data[nama]</td>
  			<td>$data[jk]</td>
  			<td>$data[jurusan]</td>
  			<td>$data[usia]</td>
  			<td>$data[edit]</td>
  	
  			</tr>";
  			$nomor++;

  		}

  ?>
  </table>
</body>
</html>