<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login System</title>
<style type="text/css">
.right {
	float:right
}
button {margin: 0; padding: 0;}
button {margin: 2px; position: relative; padding: 4px 4px 4px 2px; 
cursor: pointer; float: left;  list-style: none;}
button span.ui-icon {float: left; margin: 0 4px;}
</style>

</head>
<body>
<form name="login" action="cek_login.php" method="POST" onSubmit="return validasi(this)">
<div class="login-inside">
<div class="login-data">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<div align="center">
<table cellpadding="0" cellspacing="0">
<tr>
<td height="25">Nama User</td>
<td>&nbsp;:&nbsp;<input type="text" name="username"  class="text" id="username" /></td>
</tr>
<tr>
<td height="26">Sandi User</td>
<td>&nbsp;:&nbsp;<input type="password" class="text" name="password" id="password" /></td>
</tr>
<tr>
<td height="26">Level User</td>
<td>&nbsp;:&nbsp;
	<select name='akses' id='akses' required>
				<option value=''>=== Login Sebagai ===</option>
				<option value='admin'>admin</option>
				<option value='guru'>guru</option>
				<option value='siswa'>siswa</option>
    </select>
</td>
</tr>
<tr>
<td colspan="2">
<div class="right">
<button type="submit" name="submit" class="ui-state-default ui-corner-all" id="icon">
<span class="ui-icon ui-icon-unlocked"></span>Login
</button>
</div>
</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</div>
</form>
</body>
</html>