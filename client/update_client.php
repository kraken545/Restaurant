<?php
include('../dbcalls/db_connection.php');

// Si no es una petición POST, redirigir y salir
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../pages/club_admin.php');
    exit;
}

$id = (int)$_POST['id'];
$naam = $_POST['naam'];
$adres = $_POST['adres'];
$email = $_POST['email'];
$telefoon = $_POST['telefoon'];

$sql = 'UPDATE clients SET naam = :naam, adres = :adres, email = :email, telefoon = :telefoon WHERE id = :id';

$stmt = $conn->prepare($sql);
$stmt->bindParam(':naam', $naam);
$stmt->bindParam(':adres', $adres);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telefoon', $telefoon);
$stmt->bindParam(':id', $id);

$stmt->execute();


header('Location: ../pages/club_admin.php?success=updated');
exit;
?>