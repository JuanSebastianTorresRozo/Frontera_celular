<?php
require_once("Conexion.php");

class Crud extends Conexion {
    private $pdo;
    private $tabla;

    public function __construct($tabla)
    {
        parent::__construct();
        $this->pdo = $this->conexion();
        $this->tabla = $tabla;
    }

    public function consultartodo(){
        try {
            $stm = $this->pdo->prepare("SELECT * FROM $this->tabla");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch(PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    public function consultarUno(int $id){
        try {
            $stm = $this->pdo->prepare("SELECT * FROM $this->tabla WHERE id = ?");
            $stm->execute([$id]);
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch(PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    public function eliminar(int $id){
        try {
            $stm = $this->pdo->prepare("DELETE FROM $this->tabla WHERE id = ?");
            $stm->execute([$id]);
        } catch(PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    public function crear(string $columnas, string $marcadores, array $datos){
        try {
            $stm = $this->pdo->prepare("INSERT INTO $this->tabla ($columnas) VALUES ($marcadores)");
            $stm->execute($datos);
        } catch(PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }
}
