<?php

require "config.php";
require "controllers/funciones.php";

if (!isset($_SESSION["usuario"]))
{
    header("Location: login.php");
    exit();
}

if ($_SESSION["role"] != "ADMIN")
{
    header("Location: dashboard.php");
    exit();
}

include "partials/header.php";
include "partials/nav.php";
?>

    <form class="form" method="POST">

        <p>Introduce el nuevo plato</p>
        <div class="fila">
            <input type="text" placeholder="Nombre" required>
            <input type="text" placeholder="Descripción">
            <input type="number" placeholder="Calorías" min="0">
            <input type="number" placeholder="Precio" min="0" step="0.01" required>
            <input type="text" placeholder="Categoría">
            <input type="text" placeholder="Ruta imagen">
            <button type="submit">Guardar</button>
        </div>

    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nuevoItem = [
        "nombre" => $_POST["nombre"],
        "descripcion" => $_POST["descripcion"],
        "calorias" => $_POST["calorias"],
        "precio" => $_POST["precio"],
        "categoria" => $_POST["categoria"],
        "imagen" => $_POST["imagen"]
    ];

    pintarTarjeta($nuevoItem);
}

?>

<?php include "partials/footer.php"; ?>