<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Feedback</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="wrapper">
        <section class="feedback-section">
            <h2>Feedback</h2>
            <form action="submit_feedback.php" method="post">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                <label for="rating">Rating:</label>
                <select id="rating" name="rating" required>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select>
                <label for="comment">Komentar:</label>
                <textarea id="comment" name="comment" required></textarea>
                <button type="submit">Kirim Feedback</button>
            </form>
            <h3>Feedback dari Pelanggan:</h3>
            <div class="feedback-list">
                <?php
                $sql = "SELECT name, rating, comment FROM feedback";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='feedback-item'>";
                        echo "<p><strong>".$row["name"]."</strong> - Rating: ".$row["rating"]."</p>";
                        echo "<p>".$row["comment"]."</p>";
                        echo "</div>";
                    }
                } else {
                    echo "Tidak ada feedback tersedia.";
                }
                ?>
            </div>
        </section>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
