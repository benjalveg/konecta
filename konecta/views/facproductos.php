<?php
require_once("../models/productos.php");
$meth_mss= Methods::singleton();
$producto=isset($_GET['producto']) ? $_GET['producto'] : NULL;
$med_list_mss=$meth_mss->get_productos_edi($producto);
$med_list=$meth_mss->get_productos();
?>
<!DOCTYPE html>
<html>
<head>
<title>Facturar productos</title>
</head>
<body>
<center>
<h1>Facturar productos</h1>
<form method="GET" name="pro" id="pro" action="">
<select name="producto" id="producto">
<option value="">..Elija producto..</option>
<?php foreach ($med_list as $l) {	?>  
<option <?php if(isset($_GET['producto']) and $_GET['producto']==$l['id']){ ?> selected <?php }?> value="<?php echo $l['id']; ?>"><?php echo $l['nombre_producto']; ?></option>
<?php } ?>
</select>
<input type="submit" value="cargar">
</form>
<form method="POST" name="edipro" id="edipro" action="../controllers/productos.php">
<input type="hidden" name="fac" id="fac" value="fac"><br/>
<input type="hidden" name="id" id="id" value="<?php echo isset($med_list_mss[0]['id']) ? $med_list_mss[0]['id'] : NULL ?>"><br/>
<table border="1" style="border-collapse: collapse;">
<tr><th>nombre_producto</th><td><input type="text" name="nombre_producto" id="nombre_producto" value="<?php echo isset($med_list_mss[0]['nombre_producto']) ? $med_list_mss[0]['nombre_producto'] : NULL ?>"><br/></td></tr>
<tr><th>cantidad vendida</th><td><input type="number" name="cantidad" id="cantidad" value=""><br/></td></tr>
</table>
<?php 
if(isset($med_list_mss[0]['stock']) and $med_list_mss[0]['stock']=='0'){ ?>
<input type="button" onclick="alert('No tiene suficiente stock para facturar')" value="Facturars">
<?php } ?>
<?php 
if(isset($med_list_mss[0]['stock']) and $med_list_mss[0]['stock']>='1'){ ?>
<input type="submit" value="Facturar">
<?php } ?>
</form>
</center>
</body>
</html>