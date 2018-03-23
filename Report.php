<?php
    
     include_once "koneksi.php";

     class usr{}
 
  //  $waktu =$_POST["waktu"];
 //   $date = new DateTime();
    $to_date = $_POST["to_date"];
    $from_date = $_POST["from_date"];
     
    
     $query =  "SELECT (pegawai.Username) AS 'NamaPegawai',(COUNT(pelanggan.ID_Pegawai)) AS 'JumlahPelanggan' FROM pelanggan INNER JOIN pegawai ON pelanggan.ID_Pegawai=pegawai.ID_Pegawai  WHERE date(waktu) BETWEEN '$from_date' AND '$to_date'  GROUP BY pelanggan.ID_Pegawai ";
   //  $ketemu = mysqli_num_rows($query);
     $x= mysqli_query($con,$query);
     $result = array(); 
    // apabila username dan password ditemukan
     while($row=mysqli_fetch_array($x))
     {
        
        array_push($result,array('NamaPegawai'=>$row[0],'JumlahPelanggan'=>$row[1]));

     }
     echo json_encode(array("result"=>$result));
     mysqli_close($con);

?>