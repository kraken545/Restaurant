<?php
include('../dbcalls/db_connection.php');


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


header('Location: ../pages/admin.php?error=invalid_method');
exit;
