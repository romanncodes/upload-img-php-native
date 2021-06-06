<?php
require_once('models/Producto.php');

use models\Producto as Producto;

$productoModel = new Producto();
$productos = $productoModel->productoList();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Demo Crud</h1>
    <form action="controllers/Controlador.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="text" name="precio" placeholder="Precio"><br>
        <input type="text" name="stock" placeholder="Stock"><br>
        <input type="file" name="foto" placeholder="Foto"><br>
        <button>Guardar</button>
    </form>
    <hr>
    <table border='1'>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Foto</th>
        </tr>
        <?php foreach ($productos as $p) { ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['nombre'] ?></td>
                <td><?= $p['precio'] ?></td>
                <td><?= $p['stock'] ?></td>
                <td>
                    <img src="<?= $p['foto'] ?>" alt="" height="50">
                </td>
            </tr>

        <?php } ?>
    </table>

</body>

</html>