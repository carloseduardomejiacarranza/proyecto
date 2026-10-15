<?php

require "../config.php";
require "../data.php";

if ($_SERVER["REQUEST_METHOD"] != "POST")
{
    header("Location: ../index.php");
    exit();
}

foreach ($usuarios as $usuario)
{
    if (
        $usuario["usuario"] == $_POST["usuario"] &&
        $usuario["password"] == $_POST["password"]
    )
    {
        $_SESSION["usuario"] = $usuario["usuario"];
        $_SESSION["role"] = $usuario["role"];

        header("Location: ../dashboard.php");
        exit();
    }
}

header("Location: ../login.php?error=1");
exit();