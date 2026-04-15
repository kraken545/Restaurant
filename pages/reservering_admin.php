<?php
session_start();

if (!isset($_SESSION['admin_username'])) {
    header('Location: ../admin/login_admin.php');
    exit;
}

include('../dbcalls/read.php');
include('../dbcalls/db_connection.php');

$editMode = false;
$editItem = null;
if (isset($_GET['edit_id'])) {
    $editMode = true;
    $id = (int)$_GET['edit_id'];
    $sql = 'SELECT * FROM reserveringen WHERE id = :id LIMIT 1';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $editItem = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pizzeria Latina - Reservas Admin</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <nav>
        <div class="logo"><a href="../index.php">Pizzeria Latina</a></div>
        <ul>
            <h1 class="roboto">Admin Panel</h1>
            <li class="login-item"><a href="../admin/logout_admin.php">Logout</a></li>
        </ul>
    </nav>

    <section class="admin-section">
        <div class="product-box" id="scrolbar">
            <h2>Reserveringen</h2>
            <table>
                <thead>
                    <tr class="trt">
                        <th>ID</th>
                        <th>Naam</th>
                        <th>Telefoon</th>
                        <th>Datum</th>
                        <th>Aantal</th>
                        <th id="actiob">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reservations as $reservation) { ?>
                        <tr>
                            <td><?php echo ($reservation['id']); ?></td>
                            <td><?php echo ($reservation['name']); ?></td>
                            <td><?php echo ($reservation['phone']); ?></td>
                            <td><?php echo ($reservation['date']); ?></td>
                            <td><?php echo ($reservation['qnty']); ?></td>
                            <td id="btn">
                                <button id="edit-btn"><a href="reservering_admin.php?edit_id=<?php echo $reservation['id']; ?>">Edit</a></button>
                                <button type="submit" id="delete-btn"><a href="../reservation/delete_reservation.php?id=<?php echo $reservation['id']; ?>" onclick="return confirm('¿Eliminar reserva?');">Delete</a></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="admin-card">
            <div class="product-box-above">
                <h2><?php echo $editMode ? 'Reservering bijwerken' : 'Reservering maken'; ?></h2>
                <form action="../reservation/<?php echo $editMode ? 'update_reservation.php' : 'create_reservation.php'; ?>" method="post">
                    <?php if ($editMode) { ?>
                        <input type="hidden" name="id" value="<?php echo ($editItem['id']); ?>" />
                    <?php } ?>
                    <input type="text" name="name" placeholder="Naam" value="<?php echo $editMode ? ($editItem['name']) : ''; ?>" required />
                    <input type="tel" name="phone" placeholder="Telefoon" value="<?php echo $editMode ? ($editItem['phone']) : ''; ?>" required />
                    <input type="date" name="date" value="<?php echo $editMode ? ($editItem['date']) : ''; ?>" required />
                    <input type="number" name="qnty" placeholder="Aantal" min="1" value="<?php echo $editMode ? ($editItem['qnty']) : '1'; ?>" required />
                    <button type="submit"><?php echo $editMode ? 'Update' : 'Add'; ?></button>
                    <?php if ($editMode) { ?>
                        <button id="cancel-btn"><a href="reservering_admin.php">Cancel</a></button>
                    <?php } ?>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <p class="dancing">&copy; 2026 Pizzeria Latina. All rights reserved.</p>
    </footer>
</body>

</html>