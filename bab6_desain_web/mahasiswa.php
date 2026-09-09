<!DOCTYPE html>
<html>
<head>
<title>Data Mahasiswa - Website Layout</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
include ('header.php');
include ('menu.php');
?>

<div class="row">
    <div class="leftcolumn">
        <div class="card">
            <h2>Data Mahasiswa</h2>
            <h5>Universitas Bina Sarana Informatika</h5>
            <table class="table">
                <tr>
                    <th>NIM</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                </tr>
                <tr>
                    <td>18082317</td>
                    <td>Mizard Farid</td>
                    <td>Tasikmalaya</td>
                </tr>
                <tr>
                    <td>18082315</td>
                    <td>Dzimar Farid</td>
                    <td>Bandung</td>
                </tr>
                <tr>
                    <td>18082316</td>
                    <td>Akhtar Muhaemin</td>
                    <td>Garut</td>
                </tr>
                <tr>
                    <td>18082318</td>
                    <td>Afham Dzakovic</td>
                    <td>Ciamis</td>
                </tr>
                <tr>
                    <td>18082320</td>
                    <td>Faizah Noor</td>
                    <td>Cirebon</td>
                </tr>
            </table>
        </div>
    </div>
    <?php
    include ('konten_kanan.php');
    ?>
</div>

<?php
include ('footer.php');
?>

</body>
</html>
