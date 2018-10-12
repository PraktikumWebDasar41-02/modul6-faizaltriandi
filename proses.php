<?php  
include 'koneksi.php';
 session_start();
  $nim            =   $_SESSION['nim'];
  $nama           =   $_SESSION['nama'];
  $kelas          =   $_SESSION['kelas'];
  $jeniskelamin   =   $_SESSION['jeniskelamin'];
  $hobi   =   $_SESSION['hobi'];
  $fakultas       =   $_SESSION['fakultas'];
  $alamat       =   $_SESSION['alamat'];

  $sql = " INSERT INTO users(nim,nama,kelas,jeniskelamin,hobi,fakultas,alamat) VALUES ('$nim','$nama','$kelas','$jeniskelamin','$hobi','$fakultas','$alamat')";
   
  if(mysqli_query($con,$sql)){
   echo "Database sudah masuk<br><br><br>";
  }else{
   echo "Database Gagal <br>".$sql.mysqli_error($con);
  }

echo "DATA MAHASISWA <br>";
echo "$nim <br>";
echo "$nama<br>";
echo "Kelas: $kelas<br>";
echo "Jenis Kelamin: $jeniskelamin<br>";
echo "Hobi: $hobi<br>";
echo "Fakultas: $fakultas<br>";
echo "Alamat: $alamat<br>";


?>