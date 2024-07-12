<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Produk Kami</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="wrapper">
        <section class="product-section">
            <h2><i><b>PRODUK KAMI</b></i></h2>
            <div class="product-options">
                <button onclick="showsepatu()"> <span>Show Sepatu</span> </button>
                <button onclick="showkemeja()"> <span>Show kemeja</span></button>
                <button onclick="showkaos()"> <span>Show kaos</span></button>
                <button onclick="showjeket()"> <span>Show jeket</span></button>
            </div>
            
            <div class="product-list">
                <?php include 'service.php'; ?>
            </div>
        </section>
    </div>

    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>
