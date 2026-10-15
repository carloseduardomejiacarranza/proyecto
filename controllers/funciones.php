<?php

function pintarTarjeta($comidas)
{
    ?>

    <div class="tarjeta">

        <img src="<?= $comidas["imagen"] ?>" alt="<?= $comidas["nombre"] ?>">

        <h3><?= $comidas["nombre"] ?></h3>

        <p>
            <strong>Descripción:</strong>
            <?= $comidas["descripcion"] ?>
        </p>

        <p>
            <strong>Calorías:</strong>
            <?= $comidas["calorias"] ?>
        </p>

        <p>
            <strong>Precio:</strong>
            <?= $comidas["precio"] ?> €
        </p>

        <p>
            <strong>Categoría:</strong>
            <?= $comidas["categoria"] ?>
        </p>

    </div>

    <?php
}
?>