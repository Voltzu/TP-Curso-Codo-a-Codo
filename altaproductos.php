<div style="overflow-y:scroll;overflow-x:none;height:100%;margin:0;">
<?php 
	if($_SESSION[nivel]!=0 || $_SESSION[nivel]==""){
?>
<h1>
	No tienes los permisos para entrar a esta secci&oacute;n
</h1>
<?php 
	}else{ 
		if($_POST[nom]!="" && $_POST[descripcion]!="" && $_POST[gen]!="" && $_POST[autor]!="" && $_POST[edit]!="" && $_POST[anio]!="" && $_POST[precio]!="" && $_POST[imagen]!=""){
			$sql="insert into libros values(0,'$_POST[nom]','$_POST[descripcion]','$_POST[gen]','$_POST[autor]','$_POST[edit]','$_POST[anio]','$_POST[precio]','$_POST[imagen]')";
			$rs=mysql_query($sql) or die("Error en $sql");
		}else{
			echo "<h2>Complete todos los campos<h2>";
		}
?>
<div id="titulo_catalogo">
	<h1> 
		Cargar Productos
	</h1>
</div>
<form action="index.php?opc=6" method="post">
	Nombre del libro:</br>
	<input type="text" name="nom"></br>
	
	Descripcion:</br>
	<input type="text" name="descripcion"></br>
	
	Genero:</br>
	<select name="gen">
		<?php 
			$sql="select * from generos";
			$rs=mysql_query($sql);	
			while($r=mysql_fetch_assoc($rs)){
		?>
		<option value="<?php echo $r['IdGenero'] ?>"><?php echo $r['Genero'] ?></option>
			<?php } ?>
		
	</select></br>
	
	Autor:</br>
	<input type="text" name="autor"></br>
	
	Editorial</br>
	<input type="text" name="edit"></br>
	
	A&ntilde;o</br>
	<input type="text" name="anio"></br>
	
	Precio</br>
	<input type="text" name="precio"></br>
	
	Im&aacute;gen</br>
	<input type="text" name="imagen"></br></br>
	
	<button type="submit" class="button">Cargar</button></br></br>

</form>
<?php } ?>
</div>