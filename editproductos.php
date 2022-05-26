<div style="overflow-y:scroll;overflow-x:none; height:100%;margin:0;">
<?php 
	if($_SESSION[nivel]!=0 || $_SESSION[nivel]==""){
?>
<h1>
	No tienes los permisos para entrar a esta secci&oacute;n
</h1>
<?php 
	}else{
		if($_POST[nom]!="" && $_POST[descripcion]!="" && $_POST[gen]!="" && $_POST[autor]!="" && $_POST[edit]!="" && $_POST[anio]!="" && $_POST[precio]!="" && $_POST[imagen]!=""){
			$sql3="update libros set Nombre='$_POST[nom]', Genero= '$_POST[gen]', Autor='$_POST[autor]', Editorial='$_POST[edit]', Anio='$_POST[anio]', Precio='$_POST[precio]', Imagen='$_POST[imagen]' where IdLibro='$_POST[id]'";
			$rs3=mysql_query($sql3);
		}
?>
<div id="titulo_catalogo">
	<h1> 
		Editar Libro
	</h1>
</div>
<form action="index.php?opc=7" method="post">
	<select name="id">
	<?php 
		$sql="select * from libros order by Genero desc";
		$rs=mysql_query($sql);
		while($r=mysql_fetch_assoc($rs)){
	?>
		<option value="<?php echo $r['IdLibro'] ?>"><?php echo $r['Nombre'] ?></option></br></br>
	<?php } ?>
	<input type="hidden" name="c" value="1">
	<button type="submit" class="button">Cargar libro</button>
</form>
<form action="index.php?opc=7" method="post" style="font-size:22px;">
<?php 
	}
	if($_POST[c]==1){
		$sql="select * from libros inner join generos on libros.Genero=generos.IdGenero where IdLibro='$_POST[id]'";
		$rs=mysql_query($sql);
		$r=mysql_fetch_assoc($rs);
 ?>
	</br>
	Nombre del libro:</br>
	<input type="text" name="nom" value="<?php echo $r['Nombre'] ?>"></br>
	
	Descripcion:</br>
	<textarea name="descripcion" style="font-family:Century Gothic;" rows="4" cols="50" maxlenght="1000" height="50px"><?php echo $r['Descripcion'] ?></textarea></br>
	
	Genero: <?php echo $r['Genero'] ?></br>
	<select name="gen">
		<?php 
			$sql2="select * from generos";
			$rs2=mysql_query($sql2);	
			while($r2=mysql_fetch_assoc($rs2)){
		?>
		<option value="<?php echo $r2['IdGenero'] ?>"><?php echo $r2['Genero'] ?></option>
		<?php } ?>
		
	</select></br>
	
	Autor:</br>
	<input type="text" name="autor" value="<?php echo $r['Autor'] ?>"></br>
	
	Editorial</br>
	<input type="text" name="edit" value="<?php echo $r['Editorial'] ?>"></br>
	
	A&ntilde;o</br>
	<input type="text" name="anio" value="<?php echo $r['Anio'] ?>"></br>
	
	Precio</br>
	<input type="text" name="precio" value="<?php echo $r['Precio'] ?>"></br>
	
	Im&aacute;gen</br>
	<input type="text" name="imagen" value="<?php echo $r['Imagen'] ?>"></br></br>
	
	<input type="hidden" name="id" value="<?php echo $_POST[id] ?>">
	
	</br></br>
	<input type="submit" value="Editar">
</form>

<?php } ?>
</div>