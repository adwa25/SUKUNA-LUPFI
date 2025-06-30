<?php
require_once 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $game = $_POST['game'];
    $nominal = $_POST['nominal'];
    if (add_top_up($nominal, $game)) {
        echo "Top up berhasil!";
    } else {
        echo "Gagal melakukan top up!";
    }
}
?>