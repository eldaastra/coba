<!-- =========================
Fajar - Fitur Tampilan
========================= -->
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Konversi Satuan</title>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #8EC5FC, #E0C3FC);
        min-height: 100vh;
        display: flex; justify-content: center; align-items: center;
    }
    .container {
        background: #fff;
        padding: 30px; border-radius: 15px;
        width: 400px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
    h1 { text-align: center; color: #4a4a4a; }
    input, select, button {
        width: 100%; margin: 8px 0; padding: 10px;
        border-radius: 8px; border: 1px solid #ccc;
    }
    button {
        background: #7a5eff; color: white; font-weight: bold;
        border: none; cursor: pointer;
    }
    button:hover { background: #5b46e8; }
    .result { background: #f3f0ff; padding: 10px; border-radius: 8px; margin-top: 10px; }
</style>
<script>
function updateSatuan() {
    const jenis = document.querySelector('select[name="jenis"]').value;
    const dari = document.querySelector('select[name="dari"]');
    const ke = document.querySelector('select[name="ke"]');
    const satuan = {
        suhu: ['celsius', 'fahrenheit', 'kelvin'],
        panjang: ['km','hm','dam','m','dm','cm','mm'],
        berat: ['kg','hg','dag','g','dg','cg','mg']
    };
    dari.innerHTML = '';
    ke.innerHTML = '';
    satuan[jenis].forEach(s => {
        dari.innerHTML += <option value="${s}">${s}</option>;
        ke.innerHTML += <option value="${s}">${s}</option>;
    });
}
</script>
</head>
<body>
<div class="container">
    <h1>Konversi Satuan</h1>
    <form method="POST">
        <select name="jenis" onchange="updateSatuan()">
            <option value="">-- Jenis Konversi --</option>
            <option value="suhu">Suhu</option>
            <option value="panjang">Panjang</option>
            <option value="berat">Berat</option>
        </select>
        <input type="number" name="nilai" placeholder="Masukkan nilai...">
        <select name="dari"></select>
        <select name="ke"></select>
        <button type="submit">Konversi</button>
    </form>
</div>
</body>
</html>
