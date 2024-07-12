<?php
session_start();
if (isset($_SESSION['pesan'])) {
    $pesan = $_SESSION['pesan'];
    unset($_SESSION['pesan']);
} else {
    $pesan = '';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Order Confirmation</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Order Confirmation Code -->
    <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="alert alert-success text-center mt-5" role="alert">
        <h4 class="alert-heading">Pesanan Berhasil!</h4>
        <p>Terima kasih telah memesan. Pesanan Anda telah berhasil dibuat dan sedang diproses.</p>
        <hr>
        <p class="mb-0">Jika Anda memiliki pertanyaan, silakan hubungi tim dukungan kami.</p>
        <a href="index.php" class="btn btn-primary mt-3">Kembali ke Halaman Utama</a>
      </div>
    </div>
  </div>
</div>

    
   

  </body>
</html>
