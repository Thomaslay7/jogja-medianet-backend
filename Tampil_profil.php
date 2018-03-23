<?php
	
	 include_once "koneksi.php";

	 class usr{}
	 $idPegawai = $_POST["id"]; 
	
	 if ((empty($username)) || (empty($password))) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Kolom tidak boleh kosong"; 
		die(json_encode($response));
	 }
	
	 $query = mysqli_query($con, "SELECT * FROM pegawai WHERE id='$idPegawai'");
	 $ketemu = mysqli_num_rows($query);
	 $row = mysqli_fetch_array($query);
	
	// apabila username dan password ditemukan
	 if(!empty($row))
	 {
	 	/*session_start();
		

	    
	    $response = new usr();
	 	$response->success = 1;
	 	$response->message = "Selamat Datang ".$row['NamaDepan']." ".$row['NamaBelakang']."!";
	 	$response->id = $row['id'];
	 	$response->username = $row['Username'];
 	
	 	die(json_encode($response));
*/	 	/*session_register("id");
	 	session_register("namadepan");
	 	session_register("namabelakang");
	 	session_register("jabatan");
	 	session_register("username");
	 	session_register("password");

	 	$_SESSION[id]= $row[id];
	 	$_SESSION[namadepan]= $row[namadepan];
	 	$_SESSION[namabelakang]= $row[namabelakang];
	 	$_SESSION[jabatan]= $row[jabatan];

	 	$_SESSION[username]= $row[username];
	 	$_SESSION[password]= $row[password];*/
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