<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sukuna_storee";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
function get_top_up() {
    global $conn;
    $sql = "SELECT * FROM top_up";
    $result = $conn->query($sql);
    return $result;
}
function add_top_up($nominal, $game) {
    global $conn;
    $sql = "INSERT INTO top_up (nominal, game) VALUES ('$nominal', '$game')";
    return $conn->query($sql) === TRUE;
}
function delete_top_up($id) {
    global $conn;
    $sql = "DELETE FROM top_up WHERE id = '$id'";
    return $conn->query($sql) === TRUE;
}
?>