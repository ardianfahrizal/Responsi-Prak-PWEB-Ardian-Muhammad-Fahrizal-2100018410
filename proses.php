<?php
echo "<head><title>List Pesanan </title></head>";
$fp = fopen("pesanan.txt", "a+");
$tanggal=$_POST['tanggal'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$paket=$_POST['paket'];
fputs($fp,"$tanggal|$nama|$alamat|$paket\n");
fclose($fp);

echo "Terima Kasih Telah Menggunakan Jasa Laundry Kami<br>";
echo "<a href=web laundry ardian.html>Form Pesanan</a><br>";
echo "<a href=lihat.php>Lihat Pesanan</a><br>";
?>