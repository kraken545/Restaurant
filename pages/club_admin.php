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
    $sql = 'SELECT * FROM clients WHERE id = :id LIMIT 1';
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
    <title>Pizzeria Latina - Club Admin</title>
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
            <h2>Client List</h2>
            <table>
                <thead>
                    <tr class="trt">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th id="actiob">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($clients as $client) { ?>
                        <tr>
                            <td><?php echo ($client['id']); ?></td>
                            <td><?php echo ($client['naam']); ?></td>
                            <td><?php echo ($client['adres']); ?></td>
                            <td><?php echo ($client['email']); ?></td>
                            <td><?php echo ($client['telefoon']); ?></td>
                            <td id="btn">
                                <button id="edit-btn"><a href="club_admin.php?edit_id=<?php echo $client['id']; ?>">Edit</a></button>
                                <button type="submit" id="delete-btn"><a href="../client/delete_client.php?id=<?php echo $client['id']; ?>" onclick="return confirm('Client verwijderen?');">Delete</a></button>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>


        <div class="admin-card">


            <div class="product-box-above">
                <h2><?php echo $editMode ? 'Edit Client' : 'Create Client'; ?></h2>
                <form action="../client/<?php echo $editMode ? 'update_client.php' : 'create_client.php'; ?>" method="post">
                    <?php if ($editMode) { ?>
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($editItem['id']); ?>" />
                    <?php } ?>
                    <input type="text" name="naam" placeholder="Naam" value="<?php echo $editMode ? htmlspecialchars($editItem['naam']) : ''; ?>" required />
                    <input type="text" name="adres" placeholder="Adres" value="<?php echo $editMode ? htmlspecialchars($editItem['adres']) : ''; ?>" required />
                    <input type="email" name="email" placeholder="Email" value="<?php echo $editMode ? htmlspecialchars($editItem['email']) : ''; ?>" />
                    <input type="tel" name="telefoon" placeholder="Telefoon" value="<?php echo $editMode ? htmlspecialchars($editItem['telefoon']) : ''; ?>" required />
                    <button type="submit"><?php echo $editMode ? 'Update' : 'Add'; ?></button> <?php if ($editMode) { ?>
                        <button id="cancel-btn"><a href="club_admin.php">Cancel</a></button>
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