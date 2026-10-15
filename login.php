<?php

require "config.php";

include "partials/header.php";
include "partials/nav.php";
?>

    <form method="POST" action="controllers/middleware.php">

        <input type="text" name="usuario" placeholder="Usuario">

        <input type="password" name="password" placeholder="Contraseña">

        <button type="submit">Entrar</button>

    </form>

<?php

if (isset($_GET["error"]))
{
    echo "<p>Usuario o contraseña incorrectos</p>";
}

?>

<?php include "partials/footer.php"; ?>