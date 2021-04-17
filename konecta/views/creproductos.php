<!DOCTYPE html>
<html>
<head>
<title>Crear productos</title>
</head>
<body>
<center>
<h1>Crear productos</h1>
<form method="POST" name="edipro" id="edipro" action="../controllers/productos.php">
<input type="hidden" name="cre" id="cre" value="cre"><br/>
<table border="1" style="border-collapse: collapse;">
<tr><th>nombre_producto</th><td><input type="text" name="nombre_producto" id="nombre_producto" value=""><br/></td></tr>
<tr><th>referencia</th><td><input type="text" name="referencia" id="referencia" value=""><br/></td></tr>
<tr><th>precio</th><td><input type="number" name="precio" id="precio" value=""><br/></td></tr>
<tr><th>peso</th><td><input type="number" name="peso" id="peso" value=""><br/></td></tr>
<tr><th>categoria</th><td><input type="text" name="categoria" id="categoria" value=""><br/></td></tr>
<tr><th>stock</th><td><input type="number" name="stock" id="stock" value=""><br/></td></tr>
</table>
<input type="submit" value="Crear">
</form>
</center>
</body>
</html>