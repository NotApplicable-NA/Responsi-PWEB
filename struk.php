<?php
echo "<head><title>My Guest Book</title> </head>";
$fp = fopen ("catatan.txt","r");
echo "<table border ='1' width = '70%' style = 'text-align : center;'>";
echo ("<tr><td>Tanggal</td><td>Pengeluaran</td></tr>");

while ($isi = fgets ($fp)){
    $pisah = explode('|',$isi);
    echo ("<tr><td> $pisah[0]</td><td> $pisah[1]</td></tr>");

}

echo "</table>";
echo "<a href = index.html>Kembali Ke Halaman Awal</a>"
?>