<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Tentang Kami</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="wrapper">
        <section class="about-section">
            <h2>Tentang Kami</h2>
            <img src="gambar toko.jpeg" alt="Toko Kami">
            <p>Kami adalah toko jahit yang berdedikasi untuk memberikan yang terbaik bagi pelanggan kami. Dengan pengalaman bertahun-tahun dalam industri fashion, kami menawarkan berbagai jasa jahit mulai dari baju, kemeja, kaos, hingga sepatu. Keunggulan kami meliputi:</p>
            <ul>
                <li>Desain kustom yang sesuai dengan keinginan pelanggan</li>
                <li>Bahan berkualitas tinggi</li>
                <li>Waktu pengerjaan yang cepat dan tepat waktu</li>
                <li>Harga yang kompetitif</li>
                <li>Pelayanan pelanggan yang ramah dan profesional</li>
            </ul>
        </section>
    </div>
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

.about-section {
  background-color: #433;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

img {
  display: block;
  margin: 0 auto;
  max-width: 100%;
  height: auto;
  border-radius: 8px;
  margin-bottom: 20px;
}

p {
  color: #fff;
  line-height: 1.6;
}

ul {
  list-style-type: disc;
  padding-left: 20px;
  color: #fff;
}

li {
  margin-bottom: 10px;
}


</style>
    <?php include 'footer.php'; ?>
</body>
</html>
