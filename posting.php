<!DOCTYPE html>
<html lang="en" dir="ltr">  
<head>    
<meta charset="utf-8">    
<title>Kirim Postingan</title>    
<script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js">
</script>  
</head>  
<body>    
<?php  include "includes/koneksi.php"; if(isset($_POST['simpan'])){  
$judul = $_POST['judul'];    
$tanggal = $_POST['tanggal'];    
$konten = $_POST['konten'];    
if($judul != ''){      
	mysqli_query($koneksi, "INSERT INTO 	posting(tanggal,judul,konten) 	VALUES('".$tanggal."','".$judul."','".$konten."') ");
	header('location: posting.php');    
	}  
  }  
?>
<form method='post'>    
<table>      
<tr>
<td>Judul</td>
<td><input type="text" name="judul" ></td>      
</tr>      
<tr>
<td>Tanggal</td>
<td><input type="date" name='tanggal'></td>
</tr>      
<tr>        
<td colspan="2"><textarea id='konten' name='konten’></textarea></td>
</tr>
<tr>
<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>    
</table>
</form>
<script type="text/javascript">
CKEDITOR.replace('konten',{  
height: "200px "
});
</script>
</body>
</html>