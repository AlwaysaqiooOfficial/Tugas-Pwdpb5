<?php
// Handler sederhana untuk menampung submit dari form kontak.php dan login.php.
// Ini hanya contoh dasar - silakan sambungkan ke database sesuai kebutuhan.

$data = $_POST;

echo "<!DOCTYPE html>";
echo "<html><head><title>Hasil Kirim</title>";
echo "<link rel='stylesheet' type='text/css' href='style.css'></head><body>";
echo "<div class='card'>";
echo "<h2>Data Diterima</h2>";
if (!empty($data)) {
    echo "<table class='table'><tr><th>Field</th><th>Nilai</th></tr>";
    foreach ($data as $key => $value) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
echo "<p><a href='index.php'>Kembali ke Beranda</a></p>";
echo "</div>";
echo "</body></html>";
