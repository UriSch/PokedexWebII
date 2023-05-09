<?php
$servername = "localhost";
$username = "root";
$dbname = "pokemon";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Connection failed" .mysqli_connect_error());
}

if(isset($_POST['nombrePokemon'])){
    $sql = "SELECT * FROM pokemon WHERE nombre LIKE '". $_POST['nombrePokemon'] ."'";
    $resultBusqueda = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultBusqueda) > 0) {
        // Mostrar los resultados
        while ($fila = mysqli_fetch_assoc($resultBusqueda)) {
            echo $fila['nombre'];
        }
    } else {
        // No hay resultados
        header('Location: list.php?error=' . $_POST['nombrePokemon']);
    }
}
mysqli_close($conn);