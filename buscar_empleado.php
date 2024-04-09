<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['dni'])) {
    $dni_buscado = $_GET['dni'];
    $empleados = file('empleados.csv');
    foreach ($empleados as $empleado) {
        $datos = explode(',', $empleado);
        if ($datos[0] == $dni_buscado) {
            $sueldo_neto = $datos[2] - ($datos[2] * ($datos[3] / 100));
            echo "<h2>Datos del empleado</h2>";
            echo "<p><strong>DNI:</strong> $datos[0]</p>";
            echo "<p><strong>Nombre:</strong> $datos[1]</p>";
            echo "<p><strong>Sueldo Neto:</strong> $sueldo_neto</p>";
            exit(); // Terminar el script después de encontrar el empleado
        }
    }
    echo "<p>No se encontró ningún empleado con el DNI proporcionado.</p>";
}
?>
