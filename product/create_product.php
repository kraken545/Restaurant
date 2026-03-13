<?php
include('../dbcalls/db_connection.php');


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
