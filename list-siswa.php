<?php
include('config.php');

$sql = "SELECT * FROM calon_siswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <h1>Daftar Siswa</h1>
    <table>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['nama'] . "</td><td>" . $row['alamat'] . "</td><td>" . $row['jenis_kelamin'] . "</td><td>" . $row['agama'] . "</td><td>" . $row['sekolah_asal'] . "</td></tr>";
            }
        } else {
            echo "Tidak ada data siswa.";
        }
        ?>
    </table>
</body>
</html>
