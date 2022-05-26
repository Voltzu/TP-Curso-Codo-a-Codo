<?php
	session_start(); 						// DEBE ESTAR PRIMERO QUE NADA
	include_once ("conectar.php");
	switch($_GET[opc]){	
		case 1:
			$h="login.php";
			break;
		case 2:
			if($_POST[user]!="" && $_POST[pass]!=""){
				$sql="select * from usuarios where Nombre='$_POST[user]' and Clave='$_POST[pass]'";
				$rs=mysql_query($sql);			
				if(mysql_num_rows($rs)>0){
					$r=mysql_fetch_assoc($rs);
					$_SESSION[user]=$r[Nombre];
					$_SESSION[nivel]=$r[Nivel];
					$h="menu_user.php";
				}else{
					$error=1;
				}
			}elseif($_SESSION[user]!=""){
				$h="menu_user.php";	
			}else{
				$h="login.php";
			}
			break;
		case 3:
			unset($_SESSION[user]);
			unset($_SESSION[nivel]);
			break;
		case 4:
			$h="catalogo.php";
			break;
		case 5:
			$h="generos.php";
			break;
		case 6:
			$h="altaproductos.php";
			break;
		case 7:
			$h="editproductos.php";
			break;
		case 8:
			$h="borrarproductos.php";
			break;
		case 9:
			$h="libro.php";
			break;
		case 10:
			$h="nuevousuario.php";
			break;
		case shop_success:
			$h="compra.php";
			break;
		default:
			$h="principal.php";
	}	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es"> 

	<head>
	
		<meta name="robots" content="index,follow"/>		
		<meta name="description" content="desarrollo de paginas web"/>
		<meta name="keywords" content="html,xhtml,css,js,ajax,diseño"/>
		
		<meta equiv="content-type" content="text/html;charset=UTF-8"/> 
				

		<title>Not Enough Time</title>
		
		<link type="text/css" rel="stylesheet" href="estilos.css"/>	
		
	</head>
	<body>
		<div id="header">
			<a href="index.php"><img src="img/logo.png" width="auto" height="100px" style="float:left;"></a>
			<a href="index.php?opc=4" class="head_izq">Cat&aacute;logo</a>
			<a href="index.php?opc=5" class="head_izq">Gen&eacute;ros</a>
			<a href="index.php?opc=2" class="head_der"> TEst</a>
			<a href="index.php?opc=2" class="head_der">
			<?php
				if($_SESSION[user]!=""){
					echo "Men&uacute; de Usuario";
				}else{
					echo "Iniciar Sesi&oacute;n";
				}
			?>
			</a>
		</div>
		<div style="background-image:url('img/background.png');width:auto;height:auto;">
			<div id="principal">
				<div id="central">
					<?php
						if($h==""){
							include_once "principal.php";
						}else{
							include_once $h;
						}	
					?>
				</div>
			</div>
		</div>
	</body>
</html>
