<?php
include 'koneksi.php';

$kriteria = array();
$query = "SELECT * FROM saw_criterias";
$result = $koneksi->query($query);

while ($row = $result->fetch_assoc()) {
    $kriteria[$row['id_criteria']] = [
        'name' => $row['name'],
        'attribute' => $row['attribute'],
        'weight' => $row['weight']
    ];
}

$alternatif = array();
$query = "SELECT * FROM saw_alternatives";
$result = $koneksi->query($query);

while ($row = $result->fetch_assoc()) {
    $alternatif[$row['id_alternative']] = $row['name'];
}

$evaluasi = array();
$query = "SELECT * FROM saw_evaluations";
$result = $koneksi->query($query);

while ($row = $result->fetch_assoc()) {
    $evaluasi[$row['id_alternative']][$row['id_criteria']] = $row['value'];
}

echo "<pre>";
print_r($kriteria);
print_r($alternatif);
print_r($evaluasi);
echo "</pre>";

?>
