<?php
include 'db_connection.php';


$menu = "SELECT * FROM MenuItems";
$stmt2 = $conn->prepare($menu);
$stmt2->execute();
$menu_items = $stmt2->fetchAll();
