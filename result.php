<?php
session_start();
if (!isset($_SESSION['data'])) {
    die("Data tidak dapat ditemukan atau tidak tersedia.");
}

$data = $_SESSION['data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Hasil Pendaftaran</h1>
        <table>
            <tr>
                <th>Nama</th>
                <td><?= htmlspecialchars($data['name']) ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= htmlspecialchars($data['email']) ?></td>
            </tr>
            <tr>
                <th>Semester</th>
                <td><?= htmlspecialchars($data['semester']) ?></td>
            </tr>
            <tr>
                <th>Keahlian</th>
                <td><?= nl2br(htmlspecialchars($data['keahlian'])) ?></td>
            </tr>
            <tr>
                <th>Isi File</th>
                <td><pre><?= htmlspecialchars($data['fileContent']) ?></pre></td>
            </tr>
            <tr>
                <th>Informasi Browser</th>
                <td><?= htmlspecialchars($data['userAgent']) ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
