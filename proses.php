<?php
    $fp = fopen("catatan.txt", "a+");
    $pengeluaran = $_POST['keluaran'];
    $date = date('Y-m-d');
    fputs($fp, "$date|$pengeluaran\n");
    fclose($fp);
    echo "<a href = index.html>Kembali Ke Halaman Awal</a>"
    
?>