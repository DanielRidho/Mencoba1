<?php
include "../koneksi.php";
$id_orders =$_POST['id_orders'];
$id_admin =$_POST['id_admin'];
$id_cust =$_POST['id_cust'];
$id_pricelist=$_POST['id_pricelist'];

$query=mysqli_query($konek,"INSERT INTO orders VALUES('','','$id_cust','$id_pricelist')") or die(mysqli_error($konek));

if($query)
{
header("location: order.php");
}
else
{
echo "Proses Input gagal";
}
?> 

