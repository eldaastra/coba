<?php
// ====================
// Eldaa - Fitur Validasi
// ====================

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

    return null;
}
?>
