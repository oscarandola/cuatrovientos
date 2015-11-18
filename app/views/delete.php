<?php

//Abre la conexión al SGBD
if (!($enlace = @mysql_connect("mysql.hostinger.es", "u704819065_river", "windows92") ))
    echo "No se pudo conectar";

//Selecciona la base de datos a utilizar
if (!mysql_select_db("rolegame"))
    echo "No se pudo seleccionar la BBDD";


if (isset($_GET["id"])) {
    $sql = "DELETE FROM creature WHERE idCreature= " . $_GET["id"];
    $resultado = mysql_query($sql);
    header("Location: ../../index.php");
}

?>
