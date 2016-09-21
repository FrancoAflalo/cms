<?php

$conn = mysqli_connect("localhost", "root", "I94sb99r!", "testajax");

$fn = $_GET['fn'];

if ($fn == "1") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $query = "INSERT INTO persona(nombre, apellido) VALUES ('{$nombre}', '{$apellido}');";

    mysqli_query($conn, $query);

    $sel = "SELECT * FROM persona;";
    $execute = mysqli_query($conn, $sel);
    while ($persona = mysqli_fetch_array($execute)) {
        echo $persona[1];
        echo "<br />";
    }

    mysqli_close($conn);
}