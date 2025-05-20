<?php
include 'preferensi.php'; 

arsort($P);
$terbaik = key($P);

echo "Dari beberapa kandidat, terpilih alternatif <b>{$alternatif[$terbaik]}</b> sebagai pilihan terbaik.";
?>
