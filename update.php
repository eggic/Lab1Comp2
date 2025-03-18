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
<form method="post">
    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
    <input type="text" name="apellido" value="<?php echo $row['apellido']; ?>" required>
    <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>" required>
    <button type="submit">Actualizar</button>
</form>
<?php include 'footer.php'; ?>