<?php
$distance = $_POST['distance'];
$shipping_time = $distance / 10; // Misalkan 10 km/h kecepatan pengiriman

echo "Waktu pengiriman: " . ceil($shipping_time) . " jam";
?>
