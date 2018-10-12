<?php
 $hostname   = "localhost";
 $username = "root";
 $pass     = "";
 $db       = "formb";
 $con     = mysqli_connect($hostname, $username, $pass, $db);

 if($con==false){
  die("koneksi gagal". $con->connect_error);
 }
 ?>
