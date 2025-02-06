<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login System</title>
<link rel="stylesheet" href="css/style_login.css" type="text/css"/>
<link type="text/css" href="css/excite-bike/jquery-ui-1.8.21.custom.css" rel="stylesheet" />

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.21.custom.min.js"></script>
<script type="text/javascript">

	$(document).ready(function() {
		$(".text").val('');
		$("#username").focus();
	});
	function validasi(){
	var username = $("#username").val();
	var password = $("#password").val();
	  if (username.length == 0){
		alert("Anda belum mengisikan Username.");
		$("#username").focus();
		return false();
	  }		 
	  if (password.length == 0){
		alert("Anda belum mengisikan Password.");
		$("#password").focus();
		return false();
	  }
	  return true();
	}
</script>
<style type="text/css">
.right {
	float:right
}
button {margin: 0; padding: 0;}
button {margin: 2px; position: relative; padding: 4px 4px 4px 2px; 
cursor: pointer; float: left;  list-style: none;}
button span.ui-icon {float: left; margin: 0 4px;}
</style>
   	 	<?php 	
   	 	
		header('location:media.php?module=home');
 ?>

</head>
</html>