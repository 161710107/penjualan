<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index Document</title>
<style type="text/css">
.putih {
 color: #FFF;
}
</style>
</head>

<body>
<div align="center">
<form id="form1" name="form1" method="post" action="anid.php">
<p>&nbsp;</p>
<table width="383" height="201" border="1">
<tr>
<td colspan="2" bgcolor="#666666">
<div align="center" class="putih">
<strong>DAFTAR SISWA </strong>
</div>
</td>
</tr>
<tr>
<td width="124" bgcolor="#CCCCCC">Nama </td>
<td width="243" bgcolor="#CCCCCC">&nbsp;
<input name="nama" type="text" /></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">kelas</td>
<td bgcolor="#CCCCCC">&nbsp;
<input name="kelas" type="text" /></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">sekolah</td>
<td bgcolor="#CCCCCC">&nbsp;
<input name="sekolah" type="text" /></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">jurusan</td>
<td bgcolor="#CCCCCC"><p>
<td><input type="radio" name="jurusan" value="rpl" id="status_0" checked="checked" />
 rpl</td>

<td><input type="radio" name="jurusan" value="tkr" id="status_1" />
 tkr</td>
<td><input type="radio" name="jurusan" value="tsm" id="status_1" />
 tsm</td>
<br />
</p></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">tempat</td>
<td bgcolor="#CCCCCC"><select name="tempat">
<option>Jakarta</option>
<option>Bandung</option>
<option>Surabaya</option>
</select>&nbsp;</td>
</tr>
<tr>
<td height="28" bgcolor="#CCCCCC">&nbsp;</td>
<td bgcolor="#CCCCCC">
<input name="" type="submit" value="tambah" />&nbsp;
<input name="" type="reset" value="Hapus" /></td>
</tr>
</table>
</form>
</div>
</body>
</html>