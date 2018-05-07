<?php
 include 'koneksi.php';
 $sql="SELECT+FROM user WHERE id"$_GET('edit'];
 	$result=$conn->query($sql);

 $nama='';
 $nim='';
 $kelas='';

 if (result->db2_num_rows>0){
 	while () {
 		# code...
 	}
 }
 $nim =$_POST ['nim'];
 $nama =$_POST ['nama'];
 $jk =$_POST ['jk'];
 $jurusan =$_POST ['jurusan'];
 $usia =$_POST ['usia'];

 $sql =mysqli_query($konek,"INSERT INTO mahasiswa SET nim='$nim', nama=$'nama', jk=$'jk', jurusan=$'jurusan', usia='$usia'");

 if ($sql){
 	echo "berhasil tambah data";
 }                                                     
 else{
 	echo"gagal tambah data"
 }
 ?>
