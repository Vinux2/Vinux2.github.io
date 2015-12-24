<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//FR"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>JOYEUX NOEL</title>
	</head>
	<Style>
	p {
    	display: inline;
	}

	fieldset {
		width: auto; margin-left: 5%; border-color: red; display: inline-block;
	}

	legend {
		font-size: 60pt; font-weight: bold; text-align: center; color: green;
	}

	label {
		font-size: 45pt;
	}

	img {
		margin-top: 500pt;
		/*margin-bottom: 20%; margin-left: 20%;*/
	}

	.nombre {
		font-size: 40pt; margin-left: 50pt; margin-bottom: 20pt; 
	}

	.submit {
		margin-left: auto; margin-right: auto;
	}

	.tailleInput {
		font-size: 60pt;
	}
	</Style>
	<body>

		<form method = "get" action = "Sapin.php">
			<fieldset > <legend> Génération du sapin </legend> 
				<table border="0">
				<tr>
					<td><label for="v1"> Nombre de branche : 	</label></td>
					<td><input class="nombre" type = "number" name = "v1" 
						value =
						"<?php 
							if (isset($_GET['reset']))
							{
								echo '6';
							} 
							else if (isset($_GET['v1']))
							{
								echo $_GET['v1'];
							} 
							else echo '6';
						?>" 
					/></td>
				</tr>
				<tr>
					<td><label for="v2"> Taille d'une branche : </label></td>
					<td><input class="nombre" type = "number" name = "v2" 
						value =
						"<?php 
							if (isset($_GET['reset']))
							{
								echo '16';
							} 
							else if (isset($_GET['v2']))
							{
								echo $_GET['v2'];
							} 
							else echo '16';
						?>" 
					/></td>
				</tr>
				<tr>
					<td><label for="v3"> Epaisseur : 			</label></td>
					<td><input class="nombre" type = "number" name = "v3" 
						value =
						"<?php 
							if (isset($_GET['reset']))
							{
								echo '20';
							} 
							else if (isset($_GET['v3']))
							{
								echo $_GET['v3'];
							} 
							else echo '20';
						?>" 
					/></td>
				</tr>
				<tr>
					<td><label for="v4"> Inclinaison : 			</label></td>
					<td><input class="nombre" type = "number" name = "v4" 
						value =
						"<?php 
							if (isset($_GET['reset']))
							{
								echo '2';
							} 
							else if (isset($_GET['v4']))
							{
								echo $_GET['v4'];
							} 
							else echo '2';
						?>" 
					/></td>
				</tr>
				</table>
				<div class="submit">
					<input  class="tailleInput" type = "submit" value = "Planter">
					<input  class="tailleInput" type = "submit" name = "reset" value = "Réinitialiser">
				</div>
			</fieldset>
		</form>

		<?php

			include "fonctions_sapin.php";

			Sapin($_GET['v1'],$_GET['v2'],$_GET['v3'],$_GET['v4']);

			echo "<div><p><img src='alicecoopermerrychristmas.gif' style='width:2000.5px;height:1490px;'/></p></div>";
		
		?>

	</body>
</html>