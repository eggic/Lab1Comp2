<?php
include 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $conn->query("INSERT INTO usuarios (nombre, apellido, telefono) VALUES ('$nombre', '$apellido', '$telefono')");
    header("Location: index.php");
}
include 'header.php';
?>

<div class="form-container">
    <h2>Nuevo Usuario</h2>
    <form method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" placeholder="Apellido" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" placeholder="Teléfono" required>
        </div>
        <button type="submit" class="submit-btn">Guardar</button>
    </form>
</div>

<?php include 'footer.php'; ?>
