<?php
include 'conexion.php';
include 'header.php';
$result = $conn->query("SELECT * FROM usuarios");
?>

<div class="table-container">
    <h2 style="text-align: center;">Usuarios Registrados</h2>

    <div class="table-wrapper"> <!-- Nuevo div envolvente -->
        <table>
            <thead>
                <tr>
                    <th>ID</th><th>Nombre</th><th>Apellido</th><th>Teléfono</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellido']; ?></td>
                        <td><?php echo $row['telefono']; ?></td>
                        <td>
                            <a href="update.php?id=<?php echo $row['id']; ?>" class="edit-btn">Editar</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('¿Estás seguro?');">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div> <!-- Cierre del div -->
</div>

<?php include 'footer.php'; ?>
