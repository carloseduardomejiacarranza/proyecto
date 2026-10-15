<?php

require "config.php";
require "data.php";
require "controllers/funciones.php";

include "partials/header.php";
include "partials/nav.php";

$totalCarne = 0;

foreach ($comidas as $comida)
{
    if ($comida["categoria"] == "Carne")
    {
        $totalCarne++;
    }
}

?>

    <main>

        <h1>Catálogo Completo</h1>

        <div class="contenedor">

            <?php

            foreach ($comidas as $comida)
            {
                pintarTarjeta($comida);
            }

            ?>

        </div>

        <h2>Platos de Carne (<?= $totalCarne ?>)</h2>

        <div class="contenedor">

            <?php

            foreach ($comidas as $comida)
            {
                if ($comida["categoria"] == "Carne")
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