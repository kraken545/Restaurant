<?php
include('db_connection.php');

$naam = $_POST['naam'];
$adres = $_POST['adres'];
$email = $_POST['email'];
$telefoon = $_POST['telefoon'];

$sql = "INSERT INTO clients (naam, adres, email, telefoon) VALUES (:naam, :adres, :email, :telefoon)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':naam', $naam);
$stmt->bindParam(':adres', $adres);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telefoon', $telefoon);

$stmt->execute();

header('Location: ../pages/about.php?success=1');
exit();
