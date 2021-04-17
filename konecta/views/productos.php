<?php
require_once("../models/productos.php");
$meth_mss= Methods::singleton();
$med_list_mss=$meth_mss->get_productos();
?>
<!DOCTYPE html>
<html lang='es'>
<head> 
<title>Productos</title>
<meta charset="utf-8" />
<script>
function openMainWin(theURL) {
		window.open(theURL, 'Interactivo7', 'width=550,height=400,left=450,top=150,scrollbars=yes');
	}
</script>
</head>
<body>
<br/><br/>
<center>
<h1>Desarrollador PHP Prueba práctica</h1><br/>
<input type="button" value="Crear" onclick="openMainWin('creproductos.php')">
</center>
 <table align="center" border="1" style="border-collapse: collapse;" width="1200" >
                <thead>
                  <tr> 
				    <th style='font-size:12;'>#</th>
				    <th style='font-size:12'>nombre_producto</th>
				  	<th style='font-size:12;'>referencia</th>
					<th style='font-size:12;'>precio</th>
					<th style='font-size:12;'>peso</th>
					<th style='font-size:12;'>categoria</th>
					<th style='font-size:12;'>stock</th>
					<th style='font-size:12;'>fecha_creacion</th>
					<th style='font-size:12;'>fecha_ultima_venta</th>
                   </tr>
                </thead>
                <tbody>
				<?php
				
				$a=0;
  		        for($i=0; $i<count($med_list_mss); $i++){ 		
				?>  
		       
				<form>
 				<tr style="">
				<td align="right" style='font-size:12;'><?php echo  $a=$a+1 ?></td>
				<td align="right" style='font-size:12;'><?php echo  $med_list_mss[$i]['nombre_producto']; ?></td>
				<td align="right" style='font-size:12;'><?php echo  $med_list_mss[$i]['referencia']; ?></td>
				<td align="right" style='font-size:12;'><?php echo  $med_list_mss[$i]['precio']; ?></td>
				<td align="right" style='font-size:12;'><?php echo  $med_list_mss[$i]['peso']; ?></td>
				<td align="right" style='font-size:12;'><?php echo  $med_list_mss[$i]['categoria']; ?></td>
				<td align="right" style='font-size:12;'><?php echo  $med_list_mss[$i]['stock']; ?></td>
				<td align="right" style='font-size:12;'><?php echo  $med_list_mss[$i]['fecha_creacion']; ?></td>
				<td align="right" style='font-size:12;'><?php echo  $med_list_mss[$i]['fecha_ultima_venta']; ?></td>
				<td align="right" style='font-size:12;'><a onclick="openMainWin('ediproductos.php?edi=edi&id=<?php echo  $med_list_mss[$i]['id']; ?>')" href="#">Editar</a></td>
				<td align="right" style='font-size:12;'><a onclick=""  href="../controllers/productos.php?del=del&id=<?php echo  $med_list_mss[$i]['id']; ?>">Eliminar</a></td>
				</tr>
				</form>
			     <?php
				
				 }
				?>
                </tbody>
             </table>
			 
<center>
<br/><br/><br/><br/>
<input type="button" value="Facturar" onclick="openMainWin('facproductos.php')">
</center>			 
</body>
</html>		