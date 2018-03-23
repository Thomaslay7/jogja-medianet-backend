<?php
	
	 include_once "koneksi.php";

	 class usr{}
	 
	 $username = $_POST["username"];
	 $password = $_POST["password"];
	 if ((empty($username)) || (empty($password))) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Kolom tidak boleh kosong"; 
		die(json_encode($response));
	 }
	
	 $query = mysqli_query($con, "SELECT * FROM pegawai WHERE username='$username' AND password='$password'");
	 $ketemu = mysqli_num_rows($query);
	 $row = mysqli_fetch_array($query);
	
	// apabila username dan password ditemukan
	 if(!empty($row))
	 {
	 	session_start();
		

	   
	    $response = new usr();
	 	$response->success = 1;
	 	$response->message = "Selamat Datang ".$row['NamaDepan']." ".$row['NamaBelakang']."!";
	 	$response->id = $row['ID_Pegawai'];
	 	$response->username = $row['Username'];
	 	$response->NamaDepan = $row['NamaDepan'];
	 	$response->NamaBelakang = $row['NamaBelakang'];
	 	$response->JenisKelamin = $row['JenisKelamin'];
	 	$response->Jabatan = $row['Jabatan'];
 		$response->NIK = $row['NIK'];
 	
	 	die(json_encode($response));
	
	 }
	 else
	 {

	 $response = new usr();
	 	$response->success = 0;
	 	$response->message = "Username atau Password salah";
	 	die(json_encode($response));
	 }
	
	 mysqli_close($con);

?>