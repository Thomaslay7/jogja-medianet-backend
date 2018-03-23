<?php
	
	 include_once "koneksi.php";

	 class usr{}
	 
	 $ID_Pegawai = $_POST["ID_Pegawai"];
	
	 $query =  "SELECT id,namaperusahaan,jenis_usaha,nama_pelanggan,ID_Pegawai FROM pelanggan WHERE ID_Pegawai='$ID_Pegawai'";
	 $ketemu = mysqli_query($con,$query);
	 $result = array();
	 	 while($row = mysqli_fetch_array($ketemu))
	 	 	{

	 	 		array_push($result,array('id'=>$row[0],'namaperusahaan'=>$row[1],'jenis_usaha'=>$row[2],'nama_pelanggan'=>$row[3],'ID_Pegawai'=>$row[4]));
	 	 		
	 	 	}
	echo json_encode(array("result"=>$result));

	 
	 mysqli_close($con);

?>