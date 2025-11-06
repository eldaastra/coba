<?php
// ====================
// Rani - Fitur Konversi
// ====================

function konversi($nilai, $dari, $ke, $jenis) {
    switch ($jenis) {
        case 'suhu':
            return konversiSuhu($nilai, $dari, $ke);
        case 'panjang':
            return konversiPanjang($nilai, $dari, $ke);
        case 'berat':
            return konversiBerat($nilai, $dari, $ke);
        default:
            return "error_satuan";
    }
}

function konversiSuhu($nilai, $dari, $ke) {
    if ($dari == 'celsius' && $ke == 'fahrenheit') return ($nilai * 9/5) + 32;
    if ($dari == 'celsius' && $ke == 'kelvin') return $nilai + 273.15;
    if ($dari == 'fahrenheit' && $ke == 'celsius') return ($nilai - 32) * 5/9;
    if ($dari == 'fahrenheit' && $ke == 'kelvin') return ($nilai - 32) * 5/9 + 273.15;
    if ($dari == 'kelvin' && $ke == 'celsius') return $nilai - 273.15;
    if ($dari == 'kelvin' && $ke == 'fahrenheit') return ($nilai - 273.15) * 9/5 + 32;
    return $nilai;
}

function konversiPanjang($nilai, $dari, $ke) {
    $satuan = [
        "km" => 1000, "hm" => 100, "dam" => 10,
        "m" => 1, "dm" => 0.1, "cm" => 0.01, "mm" => 0.001
    ];
    $meter = $nilai * $satuan[$dari];
    return $meter / $satuan[$ke];
}

function konversiBerat($nilai, $dari, $ke) {
    $satuan = [
        "kg" => 1000, "hg" => 100, "dag" => 10,
        "g" => 1, "dg" => 0.1, "cg" => 0.01, "mg" => 0.001
    ];
    $gram = $nilai * $satuan[$dari];
    return $gram / $satuan[$ke];
}
?>
