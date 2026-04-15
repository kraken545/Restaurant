<?php
include('../dbcalls/db_connection.php');
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    $sql = "DELETE FROM reserveringen WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header('Location: ../pages/reservering_admin.php?success=deleted');
        exit;
    }
}
?>