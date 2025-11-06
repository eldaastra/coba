<?php

function validasiInput($nilai, $dari, $ke, $jenis) {
    if ($nilai === '') {
        return "⚠️ Harap masukkan nilai sebelum melakukan konversi.";
    }
    if ($dari === $ke) {
        return "⚠️ Satuan asal dan tujuan tidak boleh sama.";
    }

    // Kelompok satuan
    $kelompok = [
        'suhu' => ['celsius'],
        'panjang' => ['km'],
        'berat' => ['kg']
    ];

    if (!isset($kelompok[$jenis])) {
        return "⚠️ Jenis konversi tidak valid.";
    }

    if (!in_array($dari, $kelompok[$jenis]) || !in_array($ke, $kelompok[$jenis])) {
        return "⚠️ Maaf, satuan yang dipilih tidak sesuai dengan jenis konversi ($jenis).";
    }

    if ($jenis != 'suhu' && $nilai < 0) {
        return "⚠️ Nilai tidak boleh negatif untuk jenis konversi panjang atau berat.";
    }

    return null;
}
?>
