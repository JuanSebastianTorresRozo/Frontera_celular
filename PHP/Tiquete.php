<?php
require_once("Crud.php");
class Tiquete extends Crud{
   
    public function __construct(public int $id=0,public string $imagen="",public string $Asunto="", public string $Descripcion="", public string $Prioridad="" ,  public string $Estado="Abierto" ,  public string $fecha_asignacion="" ,  public string $fecha_ejecucion="" ,  public string $Diagnostico="" ,  public string $Solucion ="" ,  public int $UsuarioPropietario=0 , public int $Agente=0)
    {
        parent::__construct("Tiquete");
    }

    public function insertar()
    {
        $this->crear("id","imagenProblema","Asunto","Descripcion","Prioridad","Estado","fecha_asignacion","fecha_ejecucion","Diagnostico","Solucion","UsuarioPropietario","Agente","?,?",[$this->Asunto, $this->Descripcion , $this->Prioridad , $this->Estado, $this->fecha_asignacion , $this-> fecha_ejecucion , $this-> Diagnostico , $this->Solucion , $this->UsuarioPropietario , $this->Agente]);
    }
}