<?php
// Iniciar sesión
session_start();

// Destruir la sesión
session_destroy();

// Redireccionar a otra página
header("Location: ../");
exit; // Asegurar que se detiene la ejecución del script después de la redirección
?>
