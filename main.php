<?php 

session_start();
error_reporting(0);
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Main</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="stylesheet" type="text/css" href="style.scss" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    </head>
    <body data-spy="scroll" data-offset="0" data-target="#navigation">
        <form action="/resumen.php">
            <input type="submit" value="Resumen Diario" />
        </form>
        <form action="/pagos/agregar_pago.php">
            <input type="submit" value="Agregar Pago" />
        </form>
        <form action="/socios/socios.php">
            <input type="submit" value="Ver Socios" />
        </form>
        <form action="/pagos/historial_pagos.php">
            <input type="submit" value="Ver Pagos" />
        </form>
        <form action="/socios/agregar_socio.php">
            <input type="submit" value="Agregar Socios" />
        </form>
        <a href="logout.php">Cerrar Sesión</a>
    </body>
</html>