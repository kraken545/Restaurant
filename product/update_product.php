<?php
include('../dbcalls/db_connection.php');

// Si no es una petición POST, redirigir y salir
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../pages/admin.php');
    exit;
}

$id = (int)$_POST['id'];
$naam = $_POST['naam'];
$price = $_POST['price'];
$omschrijving = $_POST['omschrijving'];
$type = $_POST['type'];

$sql = 'UPDATE MenuItems SET naam = :naam, price = :price, omschrijving = :omschrijving, type = :type WHERE id = :id';

$stmt = $conn->prepare($sql);
$stmt->bindParam(':naam', $naam);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':omschrijving', $omschrijving);
$stmt->bindParam(':type', $type);
$stmt->bindParam(':id', $id);

$stmt->execute();


header('Location: ../pages/admin.php?success=updated');
exit;
