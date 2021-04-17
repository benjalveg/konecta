<?php 
session_start();
date_default_timezone_set("America/Bogota");
class Methods_mss   
{
   private static $instancias_mss;
   private $dbh_mss;
   
   private function __construct() 
   { 
       try{
	      $dnsdriver = "sqlsrv:Server=192.168.1.241,1433;Database=Droguerias_Paris";//Este conecta por medio de driver sqlsrv con usuario y clave - conexion por red
		  $this->dbh_mss = new PDO($dnsdriver,'sa','Bj12345');
		//$this->dbh_mss = new PDO($dsn,'','');
		  $this->dbh_mss->exec("SER CHARACTER SET utf8");
	   } catch (PDOExecption $e){
	     print "Error!: " . $e->getMessage();
		 die();
	   }
   }

   public static function singleton()   
   {
        if (!isset(self::$instancias_mss)) {
            $miclase = __CLASS__;
            self::$instancias_mss = new $miclase;
        }
        return self::$instancias_mss;
   }
/****************************************INICIO DE SUGERIDO**************************************/
   public function get_clase()
   {
        try {
	      
            $query = $this->dbh_mss->prepare("select * from referencias_cla order by descripcion");
			$query->execute();
            return $query->fetchAll();
            $this->dbh_mss = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
   }
}