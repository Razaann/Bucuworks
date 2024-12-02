<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari formulir
    $customerName = htmlspecialchars($_POST['customerName']);
    $selectedProduct = htmlspecialchars($_POST['selectedProduct']);
    $productType = htmlspecialchars($_POST['productType']);

    // Tetapkan nilai default jika input tidak tersedia
    $color = isset($_POST['color']) ? htmlspecialchars($_POST['color']) : "Tidak Ada Opsi";
    $material = isset($_POST['material']) ? htmlspecialchars($_POST['material']) : "Tidak Ada Opsi";
    $theme = isset($_POST['theme']) ? htmlspecialchars($_POST['theme']) : "Tidak Ada Opsi";
    $budget = htmlspecialchars($_POST['budget']);
    $customerNumber = htmlspecialchars($_POST['customerNumber']);

    // Query untuk memasukkan data
    $sql = "INSERT INTO orders (customerName, selectedProduct, productType, color, material, theme, budget, customerNumber)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Siapkan statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssssss",
        $customerName,
        $selectedProduct,
        $productType,
        $color,
        $material,
        $theme,
        $budget,
        $customerNumber
    );

    // Eksekusi statement
    if ($stmt->execute()) {
        // Jika berhasil, arahkan ke WhatsApp
        $waNumber = "+6281383545643"; // Nomor WhatsApp admin
        $message = "
Halo Admin Bucuworks,
Saya ingin memesan produk berikut:

- Nama: $customerName
- Produk: $selectedProduct
- Jenis: $productType
- Warna: $color
- Material: $material
- Tema: $theme
- Budget: $budget
- Nomor WhatsApp: $customerNumber

Mohon info lebih lanjut. Terima kasih!
        ";
        $waLink = "https://wa.me/$waNumber?text=" . urlencode($message);
        header("Location: $waLink");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup koneksi
    $stmt->close();
    $conn->close();
}
?>
