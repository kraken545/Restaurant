<?php
include('../dbcalls/db_connection.php');
if (isset($_GET['id'])) {
    $id = (int)$_GET['id']; // Captura el ID de la URL

    $sql = "DELETE FROM clients WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header('Location: ../pages/club_admin.php?success=deleted');
        exit;
    }
}
?>