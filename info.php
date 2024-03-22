<?php
//definisikan variables
 $nama = 'Rosalie Naurah';
 $umur = 13;
 $berat = 22.4;
echo 'Nama : ' . $nama;
echo '<br/>Umur : ' . $umur.' Tahun';
echo '<br/>Berat : '.$berat.' Kg';
echo "<br/>Hello $nama Apakabar";
<hr>
// variable system
 echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
 echo '<br/>Nama File '.$_SERVER["PHP_SELF"];
?>