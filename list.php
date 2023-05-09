<?php
include 'header.php';
?>
<main>
    <?php
    if(isset($_GET['error'])){
        if($_GET['error'] != "")
        echo  $_GET['error'] . ' no existe.';
    }
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID Pokemon</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo</th>
                <th scope="col">Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($pokemonList as $pokemon){
                echo "<tr>
                    <td>" . $pokemon['id_pokemon'] ."</td>
                    <td>" . $pokemon['nombre'] ."</td>
                    <td> <img src=imagenes/" . strtoupper($pokemon['tipo']) . ".jpg width='100em'></td>
                    <td><img src=" . $pokemon['foto'] . "alt=" . $pokemon['id_pokemon'] . "></td>";
            }
            ?>
        </tbody>
    </table>
</main>
<?php
include 'footer.php';
?>

