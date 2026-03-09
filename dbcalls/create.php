<?php
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $naam = $_POST['naam'];
    $adres = $_POST['adres'];
    $email = $_POST['email'];
    $telefoon = $_POST['telefoon'];

    $sql = "INSERT INTO clients (naam, adres, email, telefoon) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$naam, $adres, $email, $telefoon]);

    header('Location: ../pages/about.php?success=1');
    exit();
}
?>
