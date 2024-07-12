<?php
$showConfirmation = false;

// Memproses form ketika dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Di sini, lakukan pemrosesan form Anda (misalnya, simpan data ke database)
    // Jika pemrosesan form berhasil, set $showConfirmation ke true
    $showConfirmation = true;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Order Form</title>
    <style>
      body {
    background: linear-gradient(to right, rgba(255, 126, 95, 0.7), rgba(254, 180, 123, 0.7)), 
                url('f2.jpg') no-repeat center center fixed;
    background-size: cover;
    font-family: 'Arial', sans-serif;
    color: #fff;
}

.container {
    margin-top: 50px;
}

form {
    background: rgba(255, 255, 255, 0.1);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.form-label {
    color: #fff;
}

.form-control {
    background: rgba(255, 255, 255, 0.2);
    border: none;
    color: #fff;
}

.form-control:focus {
    background: rgba(255, 255, 255, 0.3);
    color: #000;
}

button {
    text-decoration: none;
    position: relative;
    border: none;
    font-size: 14px;
    font-family: inherit;
    cursor: pointer;
    color: #fff;
    width: 9em;
    height: 3em;
    line-height: 2em;
    text-align: center;
    background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
    background-size: 300%;
    border-radius: 30px;
    z-index: 1;
}

button:hover {
    animation: ani 8s linear infinite;
    border: none;
}

@keyframes ani {
    0% {
        background-position: 0%;
    }

    100% {
        background-position: 400%;
    }
}

button:before {
    content: "";
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    z-index: -1;
    background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
    background-size: 400%;
    border-radius: 35px;
    transition: 1s;
}

button:hover::before {
    filter: blur(20px);
}

button:active {
    background: linear-gradient(32deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
}

    </style>
  </head>
  <body>
    <div class="container">
      
      <?php if ($showConfirmation) : ?>
          <?php include("berhasil.php"); ?>
      <?php endif; ?>

      <!-- Form Order -->
      <form class="row g-3" method="post" action="order.php">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4" name="password">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Spesifik</label>
          <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Kota</label>
          <input type="text" class="form-control" id="inputCity" name="city">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Metode Pembayaran</label>
          <select id="inputState" class="form-select" name="payment_method">
            <option selected="">Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Tambahan</label>
          <input type="text" class="form-control" id="inputZip" name="zip">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" name="check">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Pesan</button>
        </div>
      </form>
    </div>
  </body>
</html>
