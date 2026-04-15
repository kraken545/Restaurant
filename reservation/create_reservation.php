<?php
include('../dbcalls/db_connection.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../pages/reservering_admin.php');
    exit;
}

$name = $_POST['name'];
$phone = $_POST['phone'];
date_default_timezone_set('Europe/Amsterdam');
$date = $_POST['date'];
$qnty = (int)$_POST['qnty'];

$sql = "INSERT INTO reserveringen (name, phone, date, qnty) VALUES (:name, :phone, :date, :qnty)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':date', $date);
$stmt->bindParam(':qnty', $qnty, PDO::PARAM_INT);
$stmt->execute();

if (isset($_POST['redirect']) && $_POST['redirect'] === 'about') {
    header('Location: ../pages/about.php?success=1');
} else {
    header('Location: ../pages/reservering_admin.php?success=created');
}
exit;
?>