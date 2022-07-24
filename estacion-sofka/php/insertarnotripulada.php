<?php 
require_once("autoload.php");

class insertarnotripulada{
    //definicion de variables
    private $funcion;
    private $ubicacion;
    private $cod_nave;
   

    //inicio constructor
    function __construct(){
        $this->conexion = new conexion();
        $this->conexion = $this->conexion->conect();
    }//fin constructos

    public function InsertarLanzadera(string $funcion, string $ubicacion, int $cod_nave){
        $this->funcion = $funcion;
        $this->ubicacion = $ubicacion;
        $this->cod_nave = $cod_nave;
        //preparacion de insercion 
        $sqlnotripulada ="INSERT INTO tbl_no_tripuladas(funcion,ubicacion,cod_nave) VALUES (?,?,?)";
        $insert = $this->conexion->prepare($sqlnotripulada);
        $datosnotripulada = array($this->funcion,$this->ubicacion,$this->cod_nave);
        $resinsert = $insert->execute($datosnotripulada);
        $idinsert = $this->conexion->LastInsertId();
        return $idinsert;
    }
    

}//cierre de clase
?>