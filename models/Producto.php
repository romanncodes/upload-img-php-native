<?php

namespace models;

require_once('Conexion.php');

class Producto
{
    private $conex;

    public function __construct()
    {
        $obj = new Conexion();
        $this->conex = $obj->getConexion();
    }

    public function insertar($data)
    {
        $stm = $this->conex->prepare("INSERT INTO producto VALUES(NULL,:nombre,:precio,:stock,:foto)");
        $stm->bindParam(':nombre', $data['nombre']);
        $stm->bindParam(':precio', $data['precio']);
        $stm->bindParam(':stock', $data['stock']);
        $stm->bindParam(':foto', $data['foto']);
        return $stm->execute();
    }

    public function productoList()
    {
        $stm = $this->conex->prepare("SELECT * FROM producto");
        $stm->execute();
        $productos = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $productos;
    }
}
