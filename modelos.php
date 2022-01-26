<?php
require "client.php";
$marca = $_GET["marca"];
$marcaSinComillas = str_replace("'", "",$marca);
$modelos = $client->ObtenerModelosPorMarca($marca);
?>
<!DOCTYPE HTML>
<html>
<body>

<h1>Modelos de la marca: <?= $marcaSinComillas?></h1>
<?php
foreach ($modelos as $id => $modelo) {

    ?>

    <figure>
        <img src="./img/<?= $modelo ?>.jpg" alt="logo" width="200px"/>
        <figcaption><?= $modelo ?></figcaption>
    </figure>


    <?php
}
?>
</body>
</html>
