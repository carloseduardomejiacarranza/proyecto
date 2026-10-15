<?php

require "config.php";
require "data.php";
require "controllers/funciones.php";

include "partials/header.php";
include "partials/nav.php";

?>

    <main>

        <h1><?= APP_NAME ?></h1>

        <p style="font-weight:bold ">
            Bienvenido a Restaurante Gourmet.
            Descubre nuestros platos destacados.
        </p>

        <h2>Platos Destacados</h2>

        <div class="contenedor">

            <?php

            foreach ($comidas as $comida)
            {
                if ($comida["destacado"])
                {
                    pintarTarjeta($comida);
                }
            }

            ?>

        </div>

    </main>

<?php

include "partials/footer.php";

?>