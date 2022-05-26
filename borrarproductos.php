<?php 
	if($_SESSION[nivel]!=0 || $_SESSION[nivel]==""){
?>
<h1>
	No tienes los permisos para entrar a esta secci&oacute;n
</h1>
<?php 
	}else{
		if($_POST[c]==1){
			$sql="delete from libros where IdLibro='$_POST[id]'";
			$rs=mysql_query($sql);
		}
?>
<div id="titulo_catalogo">
	<h1> 
		Borrar Libro
	</h1>
</div>
<form action="index.php?opc=8" method="post">
	<select name="id">
	<?php 
		$sql="select * from libros order by Genero desc";
		$rs=mysql_query($sql);
		while($r=mysql_fetch_assoc($rs)){
	?>
		<option value="<?php echo $r['IdLibro'] ?>"><?php echo $r['Nombre'] ?></option></br></br>
	<?php } ?>
	<input type="hidden" name="c" value="1">
	<input type="submit" value="Borrar libro">
</form>
<?php } ?>