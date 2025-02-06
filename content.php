<?php
include "inc/inc.koneksi.php";
$mod = $_GET['module'];
if ($mod=='home')
{
	echo "<h2>Selamat Datang Di Web Site</h2>";
	echo "<h2>Klinik Hewan Dinas Perkebunan dan Pertenakan SUMUT</h2>";
	echo '<img src="images/sekolah.jpg" width="1190" height="450" />';

}
elseif ($mod=='data_dokter'){
    include "modul/data_dokter/data_dokter1.php";
}

elseif ($mod=='informasi'){
    include "modul/informasi/data_informasi1.php";
}

elseif ($mod=='data_pelanggan'){
    include "modul/data_pelanggan/data_pelanggan1.php";
}

elseif ($mod=='data_rekam_medis'){
    include "modul/data_rekam_medis/data_rekam_medis1.php";
}




elseif ($mod=='konfirmasi'){
    include "modul/data_pendaftaran/data_pendaftaran.php";
}

elseif ($mod=='gambar'){
    include "modul/pendaftaran/data.php";
}

elseif ($mod=='login'){
    include "admin.php";
}

elseif ($mod=='keluar'){
    include "index.php";
}
else{
  echo "<b>MODUL BELUM ADA ATAU BELUM LENGKAP</b>";
}
?>