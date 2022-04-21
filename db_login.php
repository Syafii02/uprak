<?php
  //menyiapkan akun database
  $hostname = "localhost";
  $username = "root";
  $passwd   = "";
  $dbname   = "uprak";

  //login ke mysql Server
  $myconn = mysqli_connect($hostname,$username,$passwd,$dbname);

  if(mysqli_connect_errno()){
  	echo "Login Gagal";
  	die("Die");
  }  
?>