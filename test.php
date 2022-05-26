<?php
	include_once("conectar.php");
	$sql="select * from generos";
	$rs=mysql_query($sql);
	while($r=mysql_fetch_assoc($rs)){
		echo $r["Genero"];
		?>
		<table>
		<?php
		$sql2="select * from libros inner join generos on libros.Genero=generos.IdGenero where libros.Genero='$r[IdGenero]'";
		$rs2=mysql_query($sql2);
		while($r2=mysql_fetch_assoc($rs2)){
		?>
			<a href="index.php?opc=9&rubro=<?php echo $r2["IdGenero"]?>">
				<tr>
					<td><?php echo $r2["Precio"] ?>
				</tr>
			</a>
		<?php } ?>
		</table>
<?php } ?>