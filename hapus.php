<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM calon_siswa WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: list-siswa.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
