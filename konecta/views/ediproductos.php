<?php
require_once("../models/productos.php");
$meth_mss= Methods::singleton();
$iddd=isset($_GET['id']) ? $_GET['id'] : NULL;
$med_list_mss=$meth_mss->get_productos_edi($iddd);
?>
<!DOCTYPE html>
<html>
<head>
<title>Editar productos</title>
</head>
<body>
<center>
<h1>Editar productos</h1>
<form method="POST" name="edipro" id="edipro" action="../controllers/productos.php">
<input type="hidden" name="edi" id="edi" value="<?php echo isset($_GET['edi']) ? $_GET['edi'] : NULL ?>"><br/>
<input type="hidden" name="id" id="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : NULL ?>"><br/>
<table border="1" style="border-collapse: collapse;">
<tr><th>nombre_producto</th><td><input type="text" name="nombre_producto" id="nombre_producto" value="<?php echo isset($med_list_mss[0]['nombre_producto']) ? $med_list_mss[0]['nombre_producto'] : NULL ?>"><br/></td></tr>
<tr><th>referencia</th><td><input type="text" name="referencia" id="referencia" value="<?php echo isset($med_list_mss[0]['referencia']) ? $med_list_mss[0]['referencia'] : NULL ?>"><br/></td></tr>
<tr><th>precio</th><td><input type="number" name="precio" id="precio" value="<?php  echo isset($med_list_mss[0]['precio']) ? $med_list_mss[0]['precio'] : NULL ?>"><br/></td></tr>
<tr><th>peso</th><td><input type="number" name="peso" id="peso" value="<?php echo isset($med_list_mss[0]['peso']) ? $med_list_mss[0]['peso'] : NULL ?>"><br/></td></tr>
<tr><th>categoria</th><td><input type="text" name="categoria" id="categoria" value="<?php echo isset($med_list_mss[0]['categoria']) ? $med_list_mss[0]['categoria'] : NULL ?>"><br/></td></tr>
<tr><th>stock</th><td><input type="number" name="stock" id="stock" value="<?php echo isset($med_list_mss[0]['stock']) ? $med_list_mss[0]['stock'] : NULL ?>"><br/></td></tr>
<tr><th>fecha_creacion</th><td><input type="text" readonly name="fecha_creacion" id="fecha_creacion" value="<?php echo isset($med_list_mss[0]['fecha_creacion']) ? $med_list_mss[0]['fecha_creacion'] : NULL ?>"><br/></td></tr>
<tr><th>fecha_ultima_venta</th><td><input type="text" readonly name="fecha_ultima_venta" id="fecha_ultima_venta" value="<?php echo isset($med_list_mss[0]['fecha_ultima_venta']) ? $med_list_mss[0]['fecha_ultima_venta'] : NULL ?>"><br/></td></tr>
</table>
<input type="submit" value="Editar">
</form>
</center>
</body>
</html>