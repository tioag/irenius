<?php
include 'db.php';

$name = $_POST['name'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];

$sql = "INSERT INTO feedback (name, rating, comment) VALUES ('$name', '$rating', '$comment')";
if ($conn->query($sql) === TRUE) {
    echo "Feedback berhasil dikirim!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
