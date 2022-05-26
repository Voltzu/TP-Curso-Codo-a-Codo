<?php
	if($_POST[user]!="" && $_POST[pass]!=""){
		$sql="select * from usuarios where Nombre='$_POST[user]'";
		$rs=mysql_query($sql);
		if(mysql_num_rows($rs)){
			echo "<h1>Usuario duplicado</h1>";
		}else{
			$sql2="insert into usuarios values (0,'$_POST[user]','$_POST[pass]',2)";
			$rs2=mysql_query($sql);
			$_POST[v]=1;
		}
	}
	if($_POST[v]==1){
		echo "<h1>Registraci&oacute;n Completa</h1>";
	}else{
?>
<form action="index.php?opc=10" method="post">
	<h1>Registrarse en NET</h1></br></br>
	<h2>
		Usuario:</br>
		<input type="text" name="user" required></br>
		Clave:</br>
		<input type="password" name="pass" required></br>
		</br>
		<input type="hidden" name="v" value="0">
		<input type="submit" value="Registrarse">
	</h2>
</form>

<?php } ?>