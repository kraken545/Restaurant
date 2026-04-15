<?php
include('../dbcalls/db_connection.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../pages/reservering_admin.php');
    exit;
}

$id = (int)$_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$qnty = (int)$_POST['qnty'];

$sql = 'UPDATE reserveringen SET name = :name, phone = :phone, date = :date, qnty = :qnty WHERE id = :id';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':date', $date);
$stmt->bindParam(':qnty', $qnty, PDO::PARAM_INT);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

header('Location: ../pages/reservering_admin.php?success=updated');
exit;
?>