<?php
include 'db_connection.php';

## Obtener todos los elementos del menú
$sql = "SELECT * FROM MenuItems";
$stmt = $conn->prepare($sql);
$stmt->execute();
$menu_items = $stmt->fetchAll();

## Obtener todos los clientes
$sql_clients = "SELECT * FROM clients";
$stmt_clients = $conn->prepare($sql_clients);
$stmt_clients->execute();
$clients = $stmt_clients->fetchAll();

## Obtener todas las reservas
$sql_reservations = "SELECT * FROM reserveringen";
$stmt_reservations = $conn->prepare($sql_reservations);
$stmt_reservations->execute();
$reservations = $stmt_reservations->fetchAll();
