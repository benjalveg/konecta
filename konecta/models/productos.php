<?php
session_start();
date_default_timezone_set("America/Bogota");
class Methods
{
    private static $instancia;
    private $dbh;

    private function __construct()
    {
        try {
			$this->dbh = new PDO('mysql:host=localhost;dbname=konecta', 'root', '');
            $this->dbh->exec("SET CHARACTER SET utf8");
	    } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    }

    public static function singleton()   
    {
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }

	public function get_productos()
    {
        try {
	        $query = $this->dbh->prepare("select * from productos");
            $query->execute();
            return $query->fetchAll();
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
	public function deleted($id)
    {
        try {
		    $result = null;
			$sql="delete from productos where id='$id'";
            $query = $this->dbh->prepare($sql);
            $result=$query->execute();
            return $result;
			$this->dbh = null;
	       } catch (PDOException $e) {
            $e->getMessage();
        }
    }

	public function updated($id,$nombre_producto,$referencia,$precio,$peso,$categoria,$stock,$fecha_creacion,$fecha_ultima_venta)
    {
        try {
		    $result = null;
			$sql="update productos set nombre_producto='$nombre_producto',referencia='$referencia',precio='$precio',peso='$peso',categoria='$categoria'
			,stock='$stock',fecha_creacion='$fecha_creacion',fecha_ultima_venta='$fecha_ultima_venta' where id='$id'";
            $query = $this->dbh->prepare($sql);
            $result=$query->execute();
            return $result;
			$this->dbh = null;
	       } catch (PDOException $e) {
            $e->getMessage();
        }
    }

	public function get_productos_edi($id)
    {
        try {
	        $query = $this->dbh->prepare("select * from productos where id='$id'");
            $query->execute();
            return $query->fetchAll();
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

	public function created($id,$nombre_producto,$referencia,$precio,$peso,$categoria,$stock,$fecha_creacion,$fecha_ultima_venta)
    {
        try {
		    $result = null;
			$sql="insert into productos (nombre_producto,referencia,precio,peso,categoria,stock,fecha_creacion) value ('$nombre_producto','$referencia','$precio','$peso','$categoria','$stock','$fecha_creacion')";
            $query = $this->dbh->prepare($sql);
            $result=$query->execute();
            return $result;
			$this->dbh = null;
	       } catch (PDOException $e) {
            $e->getMessage();
        }
    }	
	
	public function facturar($id,$cantidad,$fecha_ultima_venta)
    {
        try {
		    $result = null;
			$sql="update productos set stock=stock-'$cantidad',fecha_ultima_venta='$fecha_ultima_venta' where id='$id'";
            $query = $this->dbh->prepare($sql);
            $result=$query->execute();
            return $result;
			$this->dbh = null;
	       } catch (PDOException $e) {
            $e->getMessage();
        }
    }

	public function factura($id,$cantidad)
    {
        try {
		    $result = null;
			$sql="insert into facturacion (id_producto,cantidad) value ('$id','$cantidad')";
            $query = $this->dbh->prepare($sql);
            $result=$query->execute();
            return $result;
			$this->dbh = null;
	       } catch (PDOException $e) {
            $e->getMessage();
        }
    }	
	
}