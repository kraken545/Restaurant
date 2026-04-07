<?php
include 'db_connection.php';


$menu = "SELECT * FROM MenuItems";
$stmt = $conn->prepare($menu);
$stmt->execute();
$menu_items = $stmt->fetchAll();
