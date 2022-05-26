<div class="titulo_catalogo">
	<h1>Menu de Usuario</h1>
</div>
<h2>
<?php
	if($_SESSION[nivel]==0){
?>
	</br>
	<a href="index.php?opc=6">Agregar Libro</a></br>
	<a href="index.php?opc=7">Editar Libro</a></br>
	<a href="index.php?opc=8">Borrar Libro</a></br></br>
<?php
	}
	if($_SESSION[nivel]==2){
?>
	</br>
	<h1>W.I.P</h1></br>

<?php } ?>
</h2>
</br>
<h2>
	<a href="index.php?opc=3">Cerrar Sesion</a>
</h2>