<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from barang");

?>
<table class="table table-bordered" border="1">
	<tr>
		<td>No</td>
		<td>Id Kategori</td>
		<td>Nama</td>
	</tr>
<?php 
$id_barang=1;
while($tampil=mysqli_fetch_array($query_view)){?>
	<tr>
		<td><?php echo $id_barang++;?></td>
		<td><?php echo $tampil['id_kategori'];?></td>
		<td><?php echo $tampil['nama'];?></td>
	</tr>
<?php }?>

</table>