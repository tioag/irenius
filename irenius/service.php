<?php
$services = [
    ["Sepatu", "f4-removebg-preview.png", "Kami menjahit sepatu dengan kualitas terbaik."],
    ["Kemeja", "kmj-removebg-preview.png", "Kami menjahit kemeja sesuai dengan selera Anda."],
    ["Kaos", "f1-removebg-preview.png", "Kami menjahit kaos dengan bahan yang nyaman."],
    ["Jaket", "jenis-jaket-1-removebg-preview.png", "Kami menjahit jaket dengan desain modern.", "jaket-removebg-preview.png"],
];

foreach ($services as $service) {
    echo "<div class='service-card'>";
    echo "<h3>{$service[0]}</h3>";
    echo "<img src='{$service[1]}' alt='{$service[0]}'>";
    echo "<p>{$service[2]}</p>";
    if (isset($service[3])) {
        echo "<img src='{$service[3]}' alt='{$service[0]}'>";
    }
    echo "</div>";
}
?>
