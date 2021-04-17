<?php
if (isset($_GET['del'])) {

    require_once '../models/productos.php';
	
	    $id = $_GET['id'];

		
 		       
									
            $control = Methods::singleton();
  $result = $control->deleted($id);

     if ($result == null ) {
           
           echo"<script type='text/javascript'>
		                alert('!ERROR!');
	                    window.location='../views/productos.php';
                        </script>";
        } 
        else{   
           
          echo"<script type='text/javascript'>
		                
	                     window.location='../views/productos.php';
                        </script>";
        }	

}

if (isset($_POST['edi'])) {


    require_once '../models/productos.php';
	
$id = $_POST['id'];
$nombre_producto	= $_POST['nombre_producto'];
$referencia		= $_POST['referencia'];			
$precio= $_POST['precio'];
$peso= $_POST['peso'];
$categoria= $_POST['categoria'];
$stock= $_POST['stock'];
$fecha_creacion= $_POST['fecha_creacion'];
$fecha_ultima_venta= $_POST['fecha_ultima_venta'];

$control = Methods::singleton();
$result = $control->updated($id,$nombre_producto,$referencia,$precio,$peso,$categoria,$stock,$fecha_creacion,$fecha_ultima_venta);

     if ($result == null ) {
           
           echo"<script type='text/javascript'>
		                alert('!ERROR UPDATE!');
	                    window.location='../views/productos.php';
                        </script>";
        } 
        else{   
           
          echo"<script type='text/javascript'>
		                alert('!OK UPDATE!');
				        window.opener.location.reload();
	                    window.close(); 
                        </script>";
        }	

}


if (isset($_POST['cre'])) {


    require_once '../models/productos.php';
	
$id = $_POST['id'];
$nombre_producto	= $_POST['nombre_producto'];
$referencia		= $_POST['referencia'];			
$precio= $_POST['precio'];
$peso= $_POST['peso'];
$categoria= $_POST['categoria'];
$stock= $_POST['stock'];
$fecha_creacion= date('Y-m-d');
$fecha_ultima_venta= $_POST['fecha_ultima_venta'];

$control = Methods::singleton();
$result = $control->created($id,$nombre_producto,$referencia,$precio,$peso,$categoria,$stock,$fecha_creacion,$fecha_ultima_venta);

     if ($result == null ) {
           
           echo"<script type='text/javascript'>
		                alert('!ERROR INSERT!');
	                    window.location='../views/productos.php';
                        </script>";
        } 
        else{   
           
          echo"<script type='text/javascript'>
		                alert('!OK INSERT!');
						window.opener.location.reload();
	                    window.close(); 
                        </script>";
        }	

}


if (isset($_POST['fac'])) {
    require_once '../models/productos.php';



	
$id = $_POST['id'];
$cantidad= $_POST['cantidad'];
$fecha_ultima_venta= date('Y-m-d h:i:sa');

$control = Methods::singleton();

$ms=$control->get_productos_edi($id);
if($cantidad>$ms[0]['stock']){ 
echo"<script type='text/javascript'>
		                alert('!ERROR la cantidad facturada es mayor al stock!');
	                    window.location='../views/facproductos.php';
                        </script>";
}else{

$result = $control->facturar($id,$cantidad,$fecha_ultima_venta);
$r = $control->factura($id,$cantidad);
     if ($result == null ) {
           
           echo"<script type='text/javascript'>
		                alert('!ERROR FACTURAR!');
	                    window.location='../views/productos.php';
                        </script>";
        } 
        else{   
           
          echo"<script type='text/javascript'>
		                alert('!OK FACTURADO!');
						window.opener.location.reload();
	                    window.close(); 
                        </script>";
        }	
 }
}

?>