<?php
$host = 'localhost';
$username = 'root';
$pasword = '';
$db = 'rumahsakit';

try {
    $conn = new PDO ("mysql:host=$host;dbname=$db", $username, $pasword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "koneksi berhasil";
} catch (PDOException $e) {
    echo "koneksi gagal:" , $e->getMessage();
}
?>
