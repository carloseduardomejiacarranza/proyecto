<?php

require "config.php";
require "data.php";

if (!isset($_SESSION["usuario"]))
{
    header("Location: login.php");
    exit();
}

include "partials/header.php";
include "partials/nav.php";
?>

    <div class="dashboard">

    <h1>Dashboard</h1>

    <p>Usuario: <?= $_SESSION["usuario"] ?></p>

    <p>Rol: <?= $_SESSION["role"] ?></p>

    <p>Total platos: <?= count($comidas) ?></p>

    </div>


<?php if ($_SESSION["role"] == "ADMIN") { ?>

<p>Eres el Administrador ahora puedes añadir platos nuevos</p>
    <p>Platos existentes:</p>
    <ul>
        <?php foreach ($comidas as $comida) { ?>
            <li><?= $comida["nombre"] ?></li>
        <?php } ?>
    </ul>

<?php } ?>

<?php include "partials/footer.php"; ?>