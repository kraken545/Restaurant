<?php
include 'db_connection.php';


$sql = "SELECT * FROM MenuItems";
$stmt = $conn->prepare($sql);
$stmt->execute();
$menu_items = $stmt->fetchAll();
