<?php
$servername = "localhost";
$username = "root";
$dbname = "pokemon";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Connection failed" .mysqli_connect_error());
}

$sql = "SELECT * FROM pokemon";
$result = mysqli_query($conn, $sql);

$pokemonList = Array();
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $pokemon = Array();
        $pokemon['id_pokemon'] = $row['id_pokemon'];
        $pokemon['nombre'] = $row['nombre'];
        $pokemon['tipo'] = $row['tipo'];
        $pokemon['foto'] = $row['foto'];
        $pokemonList[] = $pokemon;
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pokedex</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
              rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav class="navbar bg-danger">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="#">
                        <img src="https://cdn-icons-png.flaticon.com/512/188/188940.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                        Pokedex
                    </a>
                    <form class="d-flex" role="search" method="post" enctype="application/x-www-form-urlencoded" action="buscador.php">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="nombrePokemon" id="nombrePokemon">
                        <button class="btn bg-warning text-white" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </header>
