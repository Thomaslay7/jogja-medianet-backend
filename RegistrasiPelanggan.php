<?php
include_once "koneksi.php";


class usr{}

$namaperusahaan= $_POST["namaperusahaan"];
$jenisusaha = $_POST["jenis_usaha"];
$namapelanggan = $_POST["nama_pelanggan"];
$alamat_pelanggan = $_POST["alamatpelanggan"];
$kel_pelanggan = $_POST["kelurahan_pelanggan"];
$kec_pelanggan = $_POST["kec_pelanggan"];
$kotakab_pelanggan = $_POST["kota_pelanggan"];
$kodepos_pelanggan = $_POST["kodepos_pelanggan"];
$nomortelepon = $_POST["no_telp_pelanggan"];
$nomorfax = $_POST["no_fax_pelanggan"];
$nomorhp = $_POST["no_hp_pelanggan"];
$email = $_POST["emailpelanggan"];
$tanggallahir = $_POST["tanggal_lahir_pelanggan"];
$jeniskelamin = $_POST["jenis_kelamin_pelanggan"];
$pekerjaan = $_POST["pekerjaan"];
$noidentitas = $_POST["no_identitas"];
$nonpwp = $_POST["NPWP"];
$jenislayanan = $_POST["layanan"];

$carapembayaran = $_POST["cara_pembayaran"];
$waktupembayaran = $_POST["waktu_pembayaran"];
$statutinggal = $_POST["status_tempat_tinggal"];

$ID_Pegawai = $_POST["ID_Pegawai"];
//session_start();

//mysql_real_escape_string() on $_SESSION['ID_Pegawai'];
$query = mysqli_query($con,"INSERT INTO pelanggan (id,namaperusahaan,jenis_usaha,nama_pelanggan,alamatpelanggan,kelurahan_pelanggan, kec_pelanggan,kota_pelanggan,kodepos_pelanggan,no_telp_pelanggan,no_fax_pelanggan,no_hp_pelanggan,emailpelanggan,tanggal_lahir_pelanggan,jenis_kelamin_pelanggan,pekerjaan,no_identitas,NPWP,layanan,cara_pembayaran,waktu_pembayaran,status_tempat_tinggal,ID_Pegawai) 
	VALUES (0,'".$namaperusahaan."','".$jenisusaha."','".$namapelanggan."','".$alamat_pelanggan."','".$kel_pelanggan."','".$kec_pelanggan."','".$kotakab_pelanggan."','".$kodepos_pelanggan."','".$nomortelepon."','".$nomorfax."','".$nomorhp."','".$email."','".$tanggallahir."','".$jeniskelamin."','".$pekerjaan."','".$noidentitas."','".$nonpwp."','".$jenislayanan."','".$carapembayaran."','".$waktupembayaran."','".$statutinggal."','".$ID_Pegawai."')");


if ($query)
{
	 			$response = new usr();
	 			$response->success = 1;
	 			$response->message = "Registrasi Pelanggan Berhasil!";
	 			die(json_encode($response));
				
} 
else 
{ 
	 			$response = new usr();
	 			$response->success = 0;
				$response->message = "Registrasi Pelanggan gagal!";
	 			die(json_encode($response));
}

mysqli_close($con);
?>