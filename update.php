<?php
include 'conexion.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$row = $result->fetch_assoc();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $conn->query("UPDATE usuarios SET nombre='$nombre', apellido='$apellido', telefono='$telefono' WHERE id=$id");
    header("Location: index.php");
}
include 'header.php';
?>

<div class="form-container">
    <h2>Actualizar Usuario</h2>
    <form method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" value="<?php echo $row['apellido']; ?>" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" value="<?php echo $row['telefono']; ?>" required>
        </div>
        <button type="submit" class="submit-btn">Actualizar</button>
    </form>
</div>

<?php include 'footer.php'; ?>
