<?php
// Destruir variables de sesión
// para destruirla primero hay que empezarla
session_start();
session_destroy();

echo "se destruyó la sesión de usuario";

?>