<?php
// Menghubungkan ke database
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $product_name = $_POST['product'];
    $customer_name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    // Validasi input
    if (empty($product_name) || empty($customer_name) || empty($address) || empty($email)) {
        echo "Semua kolom harus diisi!";
        exit;
    }

    // Simpan data ke database
    $stmt = $conn->prepare("INSERT INTO orders (product_name, customer_name, address, email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $product_name, $customer_name, $address, $email);

    if ($stmt->execute()) {
        echo "Pesanan berhasil disimpan!<br>";
        echo "<a href='case3.php'>Kembali ke Beranda</a>";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Metode pengiriman tidak valid!";
}
?>
