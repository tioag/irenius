<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Proses Kerja Kami</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="wrapper">
        <section class="work-section">
            <h1><i><b>PROSES KERJA KAMI</b></i></h1>
            <h2><p>Kami menjahit pakaian dengan proses yang terstruktur dan efisien. Berikut adalah waktu pengerjaan untuk setiap jenis produk:</p></h2>
            <ul>
                <li><h2>kaos: 2 hari</h2></li>
                <li><h2>kemeja: 2 hari</h2></li>
                <li><h2>sepatu: 3 hari</h2></li>
                <li><h2>jeket: 2 hari</h2></li>
                
            </ul>
            <h2><i><P>Pengiriman barang tergantung pada jarak pelanggan. Pelanggan harus memasukkan data diri dan alamat agar sistem dapat menghitung lama pengiriman secara otomatis.</P></i></h2>
            <form action="calculate_shipping.php" method="post">
                <label for="address"><h3>Alamat:</h3></label>
                <input type="text" id="address" name="address" required>
                < for="distance"><h3>Jarak (km):</h3></label>
                <input type="number" id="distance" name="distance" required>
                <button type="submit">Hitung Waktu Pengiriman</button>
                <style>
                    body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  margin: 0;
  padding: 0;
}

.wrapper {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

.work-section {
 background-color: #678;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}

h1 {
  text-align: center;
  font-style: italic;
  color: #fff;
}

h2 {
  margin-top: 20px;
  margin-bottom: 10px;
  color: #fff;
}

p {
  color: #fff;
}

ul {
  list-style-type: none;
  padding-left: 0;
}

li {
  margin-bottom: 10px;
}

form {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  width: 100%;
  margin-top: 20px;
}

label {
  font-weight: bold;
}

input[type="text"],
input[type="number"] {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type="submit"] {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}

                </style>
            </form>
        </section>
    </div>

    