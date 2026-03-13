<?php
include('../dbcalls/db_connection.php');

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = 'DELETE FROM MenuItems WHERE id = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    header('Location: ../pages/admin.php?success=deleted');
    exit;
}

header('Location: ../pages/admin.php?error=missing_id');
exit;
