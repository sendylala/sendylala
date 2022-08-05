<?php 
session_start();

$id_catalog = $_GET['id_menu'];

if (isset($_SESSION['pesanan'][$id_catalog]))
{
	$_SESSION['pesanan'][$id_catalog]+=1;
}

else 
{
	$_SESSION['pesanan'][$id_catalog]=1;
}

echo "<script>alert('Produk telah masuk ke pesanan anda');</script>";
echo "<script>location= 'pesanan_pembeli.php'</script>";

 ?>