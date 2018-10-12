<form method="post">
<center><h1>Pendaftaran Mahasiswa</h1>
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" placeholder="NIM" maxlength="10"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" placeholder="Nama" maxlength="20"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td><input type="radio" name="1" value="kelas"> D3MI-41-01<br>
      <td><input type="radio" name="1" value="kelas"> D3MI-41-02<br>
      <td><input type="radio" name="1" value="kelas"> D3MI-41-03<br></td>
		</tr>
   <!-- <tr> 
    <td>KOMENTAR : <br><textarea name="komen" placeholder="Isikan Komentar"></textarea><br></td>
    </tr>
     <tr> 
    <td>Tanggal Lahir : <br><input type="date" name="tanggal"><br></td>
    </tr> -->
		<tr>
			<td>JenisKelamin</td>
			<td><input type="radio" name="jeniskelamin" value="laki- laki">laki-laki<br>
				<input type="radio" name="jeniskelamin" value="perempuan">perempuan<br>
		</tr>
    <tr>
      <td>
        Hobi
      </td>
      <td>
        <input type="checkbox" name="membaca" value="hobi">membaca<br>
        <input type="checkbox" name="menulis" value="hobi">menulis<br>
        <input type="checkbox" name="melukis" value="hobi">melukis<br>
      </td>
    </tr>
		<!-- <tr>	
			<td>ProgramStudi</td>
			<td><select name="programstudi" id="programstudi">
					<option value="D3 Teknologi Telekomunikasi">D3 Teknologi Telekomunikasi</option>
  					<option value="D3 Rekayasa Perangkat Lunak Aplikasi">D3 Rekayasa Perangkat Lunak Aplikasi</option>
  					<option value="D3 Sistem Informasi Akuntansi">D3 Sistem Informasi Akuntansi</option>
  					<option value="D3 Teknologi Komputer">D3 Teknologi Komputer</option>
  					<option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
  					<option value="D3 Perhotelan">D3 Perhotelan</option>
  					<option value="S1 Terapan Teknologi Rekayasa Multimedia">S1 Terapan Teknologi Rekayasa Multimedia</option>			
  			</select>
  		</tr>
  		<tr> -->
  			<td>Fakultas</td>
			<td><select name="fakultas" id="fakultas">
					<option value="FKB">FKB</option>
  					<option value="FIT">FIT</option>
  					<option value="FIK">FIK</option>
  					<option value="FEB">FEB</option>
  					<option value="FTE">FTE</option>	
  			</select>
  		</tr>

<tr>
  <td>
    Alamat :
  </td>
  <td>
    <input type="textarea" name="alamat" value="alamat">
  </td>
</tr>  		
			<td><input type="submit" name="submit" value="Login"></td>
	</table>
</center>

<?php
if (isset($_POST['submit'])) {
    session_start();
    $nim				  = $_POST['nim'];
    $nama				  = $_POST['nama'];
    $kelas			  = $_POST['kelas'];
    $jeniskelamin     = $_POST['jeniskelamin'];
    $hobi      = $_POST['hobi'];
    $fakultas	= $_POST['fakultas'];
    $alamat	= $_POST['alamat'];
      
    $_SESSION['nim']          = $nim;
    $_SESSION['nama']         = $nama;
    $_SESSION['kelas']        = $kelas;
    $_SESSION['jeniskelamin']        = $jeniskelamin;
    $_SESSION['hobi']      = $hobi;
    $_SESSION['fakultas'] = $fakultas;
    $_SESSION['alamat'] = $alamat;
    


    $error = array();
    if (strlen($nim)<=10) {
      $error['nim']=="nim harus 10";
    }if(strlen($nama)<=20){
      $error['nama']=="nama harus 20";
    }if (is_null($kelas)) {
      $error['kelas']=="kelas tidak boleh kosong";
    }if (is_null($jeniskelamin)) {
      $error['jeniskelamin']=="jeniskelamin tidak boleh kosong";
    }if (is_null($hobi)) {
      $error['hobi']=="hobi tidak boleh kosong";
    }if (is_null($fakultas)) {
      $error['fakultas']=="fakultas tidak boleh kosong";
    }if (is_null($alamat)) {
      $error['alamat']=="hobi tidak boleh kosong";
    }else{
      header("location:proses.php"); 
    }
   
}
?>
