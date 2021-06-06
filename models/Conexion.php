<?php

namespace models;

class Conexion
{
    private $conex;
    private $database = 'integracion_demo';
    private $user = 'root';
    private $pass = 'root';

    public function __construct()
    {
        try {
            $this->conex = new \PDO("mysql:host=localhost;dbname=$this->database", $this->user, $this->pass);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getConexion()
    {
        return $this->conex;
    }
}
