<?php

//aktifkan session1
session_start();

//capture parameter dari form login
//username ke variabel $txtUserName
//password ke variabel $txtUserPassword
$txtUserName = $_POST['txtUserName'];
$txtUserPassword = $_POST['txtUserPassword'];

/*
//tampilkan ke browser
echo 'txtUserName = '.$txtUserName;
echo '<hr/>';
echo 'txtUserPassword = '.$txtUserPassword;
*/
// cek apakah User Name ada nilainya dan lebih dari 6 karakter
if($txtUserName =='' || strlen($txtUserName) < 6){
	echo 'Username kosong / kurang dari 6 karakter!';
} else{

	//cek apakah User Password ada nilainya
	if($txtUserPassword==''){
		echo 'Password kosong!';
	} else{
		//semua validasi hasilnya ok
		//set nilai session bernama txtUserName
		$_SESSION['txtUserName'] = $txtUserName;

		//buka halaman index.php
		header('location:index.php');
	}
}