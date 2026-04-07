<?php
include('../dbcalls/db_connection.php');

// Si no es una petición POST, redirigir y salir
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../pages/admin.php');
    exit;
}

    $naam = $_POST['naam'];
    $price = $_POST['price'];
    $omschrijving = $_POST['omschrijving'];
    $type = $_POST['type'];

    $sql = 'INSERT INTO MenuItems (naam, price, omschrijving, type) VALUES (:naam, :price, :omschrijving, :type)';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':naam', $naam);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':omschrijving', $omschrijving);
    $stmt->bindParam(':type', $type);


    $stmt->execute();
    
    header('Location: ../pages/admin.php?success=created');
    exit;
