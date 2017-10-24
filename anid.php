<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.putih {
 color: #FFF;
}
</style>
</head>
<body>

<?php 
$nama_barang = $_POST['Nama'];
$harga = $_POST['kelas'];
$jumlah = $_POST['sekolah'];
$status = $_POST['jurusan'];
$kota = $_POST['tempat'];


?>

<div align="center">
<table width="297" border="1">
<tr>
<td colspan="2" bgcolor="#666666">
<div align="center" class="putih">
<strong>hasil data </strong>
</div>
</td>
</tr>
<tr>
<td width="116" bgcolor="#CCCCCC">Nama</td>
<td width="165" bgcolor="#CCCCCC">&nbsp;
<?php echo "$nama"; ?></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">kelas</td>
<td bgcolor="#CCCCCC">&nbsp;
<?php echo "Kelas"; ?></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">sekolah</td>
<td bgcolor="#CCCCCC">&nbsp;
<?php echo "$sekolah"; ?></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">jurusan</td>
<td bgcolor="#CCCCCC">&nbsp;
<?php echo "jurusan"; ?></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">tempat</td>
<td bgcolor="#ffffff">&nbsp;
<?php echo "$tempat"; ?></td>
</tr>

</table>
<a href="index.php"> &lt;&lt; Kembali</a><br />
</div>
</body>
</html>