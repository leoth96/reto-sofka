<?php 
require_once("autoload.php");

class insertarnave{
    //definicion de variables
    private $id_nave;
    private $nombre_nave;
    private $pais_fabricacion;
    private $tiempo_ini_actividad;
    private $tiempo_fin_actividad;
    private $peso;
    private $empuje;
    private $tipo_combustible;
    private $conexion;

    //inicio constructor
    function __construct(){
        $this->conexion = new conexion();
        $this->conexion = $this->conexion->conect();
    }//fin constructos

    public function InsertarNave(int $id_usuario, string $nombre_nave, string $pais_fabricacion, string $tiempo_ini_actividad, string $tiempo_fin_actividad, float $peso, float $empuje, string $tipo_combustible){
        $this->id_nave = $id_usuario;
        $this->nombre_nave = $nombre_nave;
        $this->pais_fabricacion = $pais_fabricacion;
        $this->tiempo_ini_actividad = $tiempo_ini_actividad;
        $this->tiempo_fin_actividad = $tiempo_fin_actividad;
        $this->peso = $peso;
        $this->empuje = $empuje;
        $this->tipo_combustible = $tipo_combustible;
        //preparacion de insercion 
        $sql ="INSERT INTO tbl_naves(id_nave,nombre_nave,pais_fabricacion,tiempo_ini_actividad,tiempo_fin_actividad,peso,empuje,tipo_combustible) VALUES (?,?,?,?,?,?,?,?)";
        $insert = $this->conexion->prepare($sql);
        $datos = array($this->id_nave,$this->nombre_nave,$this->pais_fabricacion,$this->tiempo_ini_actividad,$this->tiempo_fin_actividad,$this->peso,$this->empuje,$this->tipo_combustible);
        $resinsert = $insert->execute($datos);
        $respuesta;
        if ($resinsert) {
            $respuesta = "ok";
        }
        else {
            $respuesta="fallo";
        }
        return $respuesta;
    }
    

}//cierre de clase
?>