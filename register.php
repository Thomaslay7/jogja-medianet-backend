<?php

	include_once "koneksi.php";

	class usr{}
	
	$namadepan = $_POST["namadepan"];	
	$namabelakang = $_POST["namabelakang"];
	$jabatan = $_POST["jabatan"];
	$jeniskelamin = $_POST["jeniskelamin"];	
	$nik = $_POST["NIK"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$confirm_password = $_POST["confirm_password"];
	
	if ((empty($username))) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom username tidak boleh kosong"; 
		die(json_encode($response));
	} else if ((empty($password))) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom password tidak boleh kosong"; 
		die(json_encode($response));
	} else if ((empty($confirm_password)) || $password != $confirm_password) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Konfirmasi password tidak sama"; 
		die(json_encode($response));
	}else {
	 	if (!empty($username) && $password == $confirm_password)
	 	{
	 	//	$random = random_word(20);
		
		//	$path = "images/".$random.".png";
		
		//	$actualpath = "http://192.168.43.100/jogjamedianet/register/$path";
	 		$query = mysqli_query($con, "INSERT INTO pegawai (id_pegawai,namadepan,namabelakang,jabatan,jeniskelamin,NIK,username, password) VALUES(0,'".$namadepan."','".$namabelakang."','".$jabatan."','".$jeniskelamin."','".$nik."','".$username."','".$password."')");
			
	 		if ($query){

	 			
	    		$response = new usr();
	 			$response->success = 1;
	 			$response->message = "Register berhasil, silahkan login.";
	 			die(json_encode($response));
				
	 		} else { 
	 			$response = new usr();
	 			$response->success = 0;
	 			$response->message = "Username sudah ada";
	 			die(json_encode($response));
	 		}
	 		
	 	}	
	 }
// fungsi random string pada gambar untuk menghindari nama file yang sama
	/*function random_word($id = 20){
		$pool = '1234567890abcdefghijkmnpqrstuvwxyz';
		
		$word = '';
		for ($i = 0; $i < $id; $i++){
			$word .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
		}
		return $word; 
	}
*/
	 mysqli_close($con);

?>	