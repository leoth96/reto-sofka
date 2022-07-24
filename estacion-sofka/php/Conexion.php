<?php
    class conexion{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "bd_naves_espaciales";
        private $conect;
        
        //inicio constructor
        public function __construct()
        {
            $conectando  = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
            try {
                $this->conect = new PDO($conectando, $this->user, $this->password);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               // echo "conexion exitosa";
            } catch (Exception $e) {
                $this->conect = "Error de conexion";
                echo "ERROR: ".$e->getMessage();
            }
        }//fin constructor

        public function conect(){
            return $this->conect;
        }
    }//fin de la clase

    //$conexion1 = new conexion();
?>