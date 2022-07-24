<?php 
require_once("autoload.php");

class insertartripulada{
    //definicion de variables
    private $funcion;
    private $cantidad_tripulantes;
    private $distancia_orbita;
    private $cod_nave;
   

    //inicio constructor
    function __construct(){
        $this->conexion = new conexion();
        $this->conexion = $this->conexion->conect();
    }//fin constructos

    public function InsertarLanzadera(string $funcion, string $cantidad_tripulantes,float $distanci_orbita, int $cod_nave){
        $this->funcion = $funcion;
        $this->cantidad_tripulantes = $cantidad_tripulantes;
        $this->distancia_orbita = $distancia_orbita;
        $this->cod_nave = $cod_nave;
        //preparacion de insercion 
        $sqltripulada ="INSERT INTO tbl_tripuladas(funcion,cantidad_tripulantes,distancia_orbita,cod_nave) VALUES (?,?,?,?)";
        $insert = $this->conexion->prepare($sqltripulada);
        $datostripulada = array($this->funcion,$this->cantidad_tripulantes,$this->distancia_orbita,$this->cod_nave);
        $resinsert = $insert->execute($datostripulada);
        $idinsert = $this->conexion->LastInsertId();
        return $idinsert;
    }
    

}//cierre de clase
?>