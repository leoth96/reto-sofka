<?php 
require_once("autoload.php");

class insertarlanzadera{
    //definicion de variables
    private $tipo_carga_util;
    private $max_peso_carga;
    private $cod_nave;
   

    //inicio constructor
    function __construct(){
        $this->conexion = new conexion();
        $this->conexion = $this->conexion->conect();
    }//fin constructos

    public function InsertarLanzadera(string $tipo_carga_util, string $max_peso_carga, int $cod_nave){
        $this->tipo_carga_util = $tipo_carga_util;
        $this->max_peso_carga = $max_peso_carga;
        $this->cod_nave = $cod_nave;
        //preparacion de insercion 
        $sqllanzadera ="INSERT INTO tbl_lanzaderas(tipo_carga_util,max_peso_carga,cod_nave) VALUES (?,?,?)";
        $insert = $this->conexion->prepare($sqllanzadera);
        $datoslanzadera = array($this->tipo_carga_util,$this->max_peso_carga,$this->cod_nave);
        $resinsert = $insert->execute($datoslanzadera);
        $idinsert = $this->conexion->LastInsertId();
        return $idinsert;
    }
    

}//cierre de clase
?>