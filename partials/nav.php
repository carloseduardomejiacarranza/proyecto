<nav>

    <a href="index.php">Inicio</a>
    <a href="catalogo.php">Catálogo</a>

    <?php if (!isset($_SESSION["usuario"])) { ?>

        <a href="login.php">Login</a>

    <?php } else { ?>

        <a href="dashboard.php">Dashboard</a>

        <?php if ($_SESSION["role"] == "ADMIN") { ?>
            <a href="add_item.php">Añadir Item</a>
        <?php } ?>

        <a href="controllers/logout.php">Logout</a>

        <span style="color:white;">Bienvenido: <?= $_SESSION["usuario"] ?></span>

    <?php } ?>

</nav>