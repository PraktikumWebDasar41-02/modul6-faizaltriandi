<form method="post">
<center><h1>Pendaftaran Login Mahasiswa</h1>
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" placeholder="NIM" maxlength="10"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="pass" name="pass" placeholder="pass"maxlength="100"></td>
		</tr>

			<td><input type="submit" name="submit" value="Login"></td>
	</table>
</center>

<?php 
$koneksi = mysql_connect("localhost","root","","formb")
if(isset($_POST["login"])){
  
 ?>}
