<?php
//array: sekumpulan data
//array  umerik dan array asosiatif
//perulangan foreach


//1. ARRAY NUMERIK
$ar_buah = array ('pepaya','mangga','pisang','jeruk');
//cetak index ke ?
echo $ar_buah[1];
echo '<br>';
//jumlah total buah
$jumlah = count($ar_buah);
echo $jumlah;
echo '<br>';

//lihat hasil sekumpulan data buah menggunakan foreach
foreach ($ar_buah as $value) {echo $value.'<br>;
    }
echo '<br>';

//2. ARRAY ASOSIATIF

?>