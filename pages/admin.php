<?php
include('../dbcalls/read.php');
include('../dbcalls/db_connection.php');


$editMode = false;
$editItem = null;
if (isset($_GET['edit_id'])) {
    $editMode = true;
    $id = (int)$_GET['edit_id'];
    $sql = 'SELECT * FROM MenuItems WHERE id = :id LIMIT 1';
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
    <title>Pizzeria Latina - Admin</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <nav>
        <div class="logo"><a href="../index.php">Pizzeria Latina</a></div>
        <ul>
           <h1 class="dancing">Admin Panel</h1>
            <li class="login-item"><a href="../index.php">Logout</a></li>
        </ul>
    </nav>

    <section class="admin-section">
        
        <div class="product-box" id="scrolbar">
            <h2>Product List</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th id="actiob">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($menu_items as $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['id']); ?></td>
                            <td><?php echo htmlspecialchars($item['naam']); ?></td>
                            <td><?php echo htmlspecialchars($item['type']); ?></td>
                            <td>€<?php echo number_format($item['price'], 2); ?></td>
                            <td id="omschrijvingl"><?php echo htmlspecialchars($item['omschrijving']); ?></td>
                            <td id="btn">
                                <button id="edit-btn"><a href="admin.php?edit_id=<?php echo $item['id']; ?>">Edit</a></button> 
                                <button id="delete-btn"><a href="../product/delete_poduct.php?id=<?php echo $item['id']; ?>" onclick="return confirm('Product verwijderen?');">Delete</a></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>


        <div class="admin-card">
            

            <div class="product-box-above">
                <h2><?php echo $editMode ? 'Edit Product' : 'Create Product'; ?></h2>
                <form action="../product/<?php echo $editMode ? 'update_product.php' : 'create_product.php'; ?>" method="post">
                    <?php if ($editMode): ?>
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($editItem['id']); ?>" />
                    <?php endif; ?>
                    <input type="text" name="naam" placeholder="naam" value="<?php echo $editMode ? htmlspecialchars($editItem['naam']) : ''; ?>" />
                    <input type="text" name="type" placeholder="type" value="<?php echo $editMode ? htmlspecialchars($editItem['type']) : ''; ?>" />
                    <input type="number" name="price" step="0.01" placeholder="Price (€)" value="<?php echo $editMode ? htmlspecialchars($editItem['price']) : ''; ?>" />
                    <input id="omschrijving" type="text" name="omschrijving" placeholder="omschrijving" value="<?php echo $editMode ? htmlspecialchars($editItem['omschrijving']) : ''; ?>" />
                    <button type="submit"><?php echo $editMode ? 'Update' : 'Add'; ?></button>
                </form>
                <?php if ($editMode): ?>
                    <p><a href="admin.php">Cancel editing</a></p>
                <?php endif; ?>
            </div>
        </div>

    </section>

    <footer>
        <p class="dancing">&copy; 2026 Pizzeria Latina. All rights reserved.</p>
    </footer>

</body>

</html>