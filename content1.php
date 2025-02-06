<?php
include "inc/inc.koneksi.php";
session_start();
$mod = $_GET['module'];
if ($mod=='home')
{
	echo "<h2>Selamat Datang Di Web Site</h2>";
    echo "<h2>SISTEM APLIKASI KONSELING</h2>";
    echo "<h3>SMA N 1 DOLOK BATU NANGGAR </h3>";
    echo '<img src="images/sekolah.jpg" width="1190" height="450" />';
    echo "&nbsp;&nbsp;". "<br>". "";
    
    echo "<div style='font-size:1.35em;font-color:#0e3c68'> Anda Login Sebagai : <b>$_SESSION[akses]</b>, Selamat Datang Di Aplikasi Konseling.";
}

elseif ($mod=='barang'){
    include "modul_pendataan/barang_kantor/form_barang.php";
}

elseif ($mod=='pegawai'){
    include "modul_pendataan/pegawai/form_pegawai.php";
}

elseif ($mod=='permintaan_barang'){
    include "modul_pendataan/permintaan/form_permintaan.php";
}

elseif ($mod=='pengadaan_barang'){
    include "modul_pendataan/pengadaan/form_pengadaan.php";
}

elseif ($mod=='chat'){
    include "modul_pendataan/chat/form_gaun.php";
}

elseif ($mod=='pelanggaran'){
    include "modul_pendataan/pelanggaran/form_pelanggaran.php";
}

elseif ($mod=='barang_keluar'){
    include "modul_pendataan/keluar/form_keluar.php";
}

elseif ($mod=='barcode'){
    include "modul_pendataan/data_barcode/form_barcode.php";
}

elseif ($mod=='lap_barang'){
    include "modul_pendataan/data_barang_kantor/form_data_barang.php";
}

elseif ($mod=='lap_permintaan'){
    include "modul_pendataan/data_permintaan/form_data_permintaan.php";
}

elseif ($mod=='lap_pengadaan'){
    include "modul_pendataan/data_pengadaan/form_pengadaan_2.php";
}

elseif ($mod=='lap_masuk'){
    include "modul_pendataan/data_masuk/form_masuk_2.php";
}

elseif ($mod=='lap_keluar'){
    include "modul_pendataan/data_keluar/form_keluar_2.php";
}

elseif ($mod=='lap_stok'){
    include "modul_pendataan/data_stok/form_stok.php";
}



elseif ($mod=='login'){
    include "admin.php";
}

else{
  echo "<b>MODUL BELUM ADA ATAU BELUM LENGKAP</b>";
}
?>