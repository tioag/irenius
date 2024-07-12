<?php
// Ambil nilai dari formulir
$customer_name = $_POST['customer_name'];// Anda bisa menggantinya dengan $_POST['customer_name'] jika sudah ada input untuk customer_name di form
$customer_address = $_POST['customer_address']; // Gantikan dengan $_POST['customer_address'] jika sudah ada input untuk customer_address di form
$product_id = $_POST['product_id']; // Gantikan dengan $_POST['product_id'] sesuai dengan apa yang dipilih pengguna
$quantity = $_POST['quantity']; // Gantikan dengan $_POST['quantity'] sesuai dengan apa yang dipilih pengguna
$size = $_POST['SIZE']; // Gantikan dengan $_POST['size'] sesuai dengan apa yang dipilih pengguna
$total_price =$_POST['total_price'];// Gantikan dengan $_POST['total_price'] sesuai dengan apa yang dipilih pengguna
$location = $_POST['location']; // Ambil nilai dari input lokasi di formulir
$tailor_id = $_POST['tailor']; // Ambil nilai dari input penjahit di formulir
$payment_method = $_POST['payment']; // Ambil nilai dari input metode pembayaran di formulir

// Koneksi ke database
$mysqli = new mysqli("localhost", "username", "password", "database2");

// Periksa koneksi
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Query INSERT dengan semua kolom yang sesuai
$sql = "INSERT INTO orders (customer_name, customer_address, product_id, quantity, size, total_price, location, tailor_id, payment_method)
        VALUES ('$customer_name', '$customer_address', $product_id, $quantity, '$size', $total_price, '$location', $tailor_id, '$payment_method')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
