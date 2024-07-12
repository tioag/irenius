<?php
include 'db.php';

// Validasi dan pembersihan input
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
$address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '';
$tailor_id = isset($_POST['tailor']) ? intval($_POST['tailor']) : 0;
$product_id = isset($_POST['product']) ? intval($_POST['product']) : 0;
$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;
$size = isset($_POST['size']) ? htmlspecialchars($_POST['size']) : '';
$payment_method = isset($_POST['payment']) ? htmlspecialchars($_POST['payment']) : '';

// Simpan data pelanggan dengan prepared statement
$stmt = $conn->prepare("INSERT INTO customers (name, email, phone, address) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $phone, $address);

if ($stmt->execute()) {
    $customer_id = $stmt->insert_id;

    // Hitung harga produk berdasarkan ukuran
    $price_result = $conn->query("SELECT price FROM products WHERE id='$product_id'");
    $price_row = $price_result->fetch_assoc();
    $price = $price_row['price'];

    if ($size == 'L' || $size == 'XL') {
        $price += 20000; // Tambahan harga untuk ukuran besar
    }

    $total_price = $price * $quantity;

    // Simpan pesanan dengan prepared statement
    $stmt = $conn->prepare("INSERT INTO orders (customer_id, tailor_id, product_id, quantity, size, payment_method, total_price) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iiisssi", $customer_id, $tailor_id, $product_id, $quantity, $size, $payment_method, $total_price);

    if ($stmt->execute()) {
        echo "Pesanan berhasil dibuat. Total yang harus dibayar: Rp " . $total_price;
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
