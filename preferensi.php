<?php
include 'normalisasi.php';

$P = array();

foreach ($normalisasi as $id_alternative => $nilai) {
    $P[$id_alternative] = 0;
    foreach ($nilai as $id_kriteria => $val) {
        $P[$id_alternative] += $val * $kriteria[$id_kriteria]['weight'];
    }
}

echo "<pre>";
print_r($P);
echo "</pre>";

?>
