<?php

namespace controllers;

require_once('../models/Producto.php');

use models\Producto as Producto;

class Controlador
{

    private $productoModel;

    public function __construct()
    {
        $this->productoModel = new Producto();
    }

    public function insertar()
    {
        $nombre_foto = $_FILES['foto']['name'];
        $temp = $_FILES['foto']['tmp_name'];

        $extension = end(explode('.', $nombre_foto));
        $nuevoNombre = $_POST['nombre'] . "_" . date("Y-m-d_H:i:s", time()) . "." . $extension;

        if (move_uploaded_file($temp, '../uploads/' . $nuevoNombre)) {
            //chmod('uploads/'.$nombre_foto, 0777);
            $foto = 'http://localhost/integracion_demo/uploads/' . $nuevoNombre;
        } else {
            $foto = '';
        }

        $this->productoModel->insertar(
            [
                'nombre' => $_POST['nombre'],
                'precio' => $_POST['precio'],
                'stock' => $_POST['stock'],
                'foto' => $foto
            ]
        );
        header('Location: ../index.php');
    }
}
$control = new Controlador();
$control->insertar();
