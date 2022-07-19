<?php
echo "<head><title> List Pesanan </title></head>";
$fp = fopen("pesanan.txt", "r");
echo "<table border=3 align=center>";
echo "<tr>";
   echo "<td>Tanggal</td>";
   echo "<td>Nama</td>";
   echo "<td>Alamat</td>";
   echo "<td>Paket</td>";
   echo "</tr>";

while ($isi = fgets($fp,80)) {
   $pisah=explode("|", $isi);
   echo "<tr>";
   echo "<td>$pisah[0]</td>";
   echo "<td>$pisah[1]</td>";
   echo "<td>$pisah[2]</td>";
   echo "<td>$pisah[3]</td>";
   echo "</tr>";
}
echo "</table>";
echo "<center><a href=web laundry ardian.html>Klik Disini</a>Untuk isi Form Pesanan</center>";
?>
