<?php
// Panggil file controller
require_once '../contr/dosen_contr.php';

// Buat objek dari kelas StudentController
$controller = new Dosen_controller();

$controller->checkLoginSession();
$nip = $_SESSION['nip'];

// Ambil data kelas
$kelas = $controller->getAllKelasbyNIP($nip);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mata Kuliah</title>
    <!-- Tambahkan CSS sesuai kebutuhan -->
    <style>
        /* Style CSS dapat ditambahkan di sini */
        /* Contoh: */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Daftar Mata Kuliah</h2>

<table>
    <thead>
        <tr>
            <th>Kode Kelas</th>
            <th>Mata Kuliah</th>
            <th>Waktu</th>
        </tr>
    </thead>
    <tbody>
        <!-- Data mata kuliah akan dimasukkan di sini menggunakan PHP -->
        <?php
        // Ambil data dari PHP dan tampilkan di sini
        foreach ($kelas as $row) {
            echo "<tr>";
            echo "<td>" . $row['kode_kelas'] . "</td>";
            echo "<td>" . $row['mata_kuliah'] . "</td>";
            echo "<td>" . $row['waktu'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
<a href="dashboard_dosen.php"> return</a>
<a href="insert_nilai.php"> isi nilai mata kuliah</a>
</body>
</html>
