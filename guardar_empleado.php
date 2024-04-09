<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $sueldo = $_POST['sueldo'];
    $descuento = $_POST['descuento'];
    
    // Guardar los datos en un archivo CSV o en la base de datos, aquí se usará un archivo CSV como ejemplo
    $linea = "$dni,$nombre,$sueldo,$descuento" . PHP_EOL;
    file_put_contents('empleados.csv', $linea, FILE_APPEND);

    // Redireccionar al usuario de nuevo a la página de inicio
    header("Location: index.php");
    exit();
}
?>
