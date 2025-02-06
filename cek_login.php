<?php
include "inc/inc.koneksi.php";
function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}
$username	= anti_injection($_POST[username]);
$pass		= anti_injection($_POST[password]);
$akses		= anti_injection($_POST[akses]);
if (!ctype_alnum($username) OR !ctype_alnum($pass)){
?>
<script>
	alert('Sekarang loginnya tidak bisa di injeksi lho.');
	window.location.href='index.php';
</script>
<?php
}else{
	$login	=mysql_query("SELECT * FROM tbl_user WHERE username='$username' AND password='$pass' AND akses='$akses'");
	$ketemu	=mysql_num_rows($login);
	if ($ketemu > 0){
		session_start();
	  	$r = mysql_fetch_array($login);
		$_SESSION[namauser]     = $r[namauser];
		$_SESSION[passuser]     = $r[kodepassword];
		$_SESSION[akses]     		= $r[akses];

if($akses=="admin"){

			header('location:media1.php?module=home');
		}	
elseif($akses=="guru"){

			header('location:media2.php?module=home');
		}	
		else
			{

			header('location:media3.php?module=home');
		}	
	}else{
	?>
    <script>
	alert('Maaf, Username atau password salah.');
	window.location.href='index.php';
	</script>
    <?php
	}
}
?>
