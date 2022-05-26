<div id="titulo_catalogo">
	<h1>
		G&eacute;neros
	</h1>
</div>
<div id="tabla">
	<?php
			$sql="select * from generos";
			$rs=mysql_query($sql);
			while($r=mysql_fetch_assoc($rs)){
	?>
	<div class="fila" style="background-color:#EE9140;">
		<a href="index.php?opc=4&gen=<?php echo $r["IdGenero"]?>" style="color:black;"><?php echo $r["Genero"] ?></a>
	</div>
	<?php } ?>
</div>