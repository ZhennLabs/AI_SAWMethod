<?php
include 'data.php'; 

$normalisasi = array();

$nilai_ekstrim = array();
foreach ($kriteria as $id_kriteria => $info) {
    $nilai_kriteria = array_column($evaluasi, $id_kriteria);
    
    if ($info['attribute'] == 'Benefit') {
        $nilai_ekstrim[$id_kriteria] = max($nilai_kriteria);
    } else {
        $nilai_ekstrim[$id_kriteria] = min($nilai_kriteria);
    }
}

foreach ($evaluasi as $id_alternative => $nilai) {
    foreach ($nilai as $id_kriteria => $val) {
        if ($kriteria[$id_kriteria]['attribute'] == 'Benefit') {
            $normalisasi[$id_alternative][$id_kriteria] = $val / $nilai_ekstrim[$id_kriteria];
        } else {
            $normalisasi[$id_alternative][$id_kriteria] = $nilai_ekstrim[$id_kriteria] / $val;
        }
    }
}

echo "<pre>";
print_r($normalisasi);
echo "</pre>";

?>
