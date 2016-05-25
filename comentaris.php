<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Discogràfica Merce</title>

	<link rel="stylesheet" href="../../../../Downloads/structure.css" type="text/css" />
	

</head>

<header>
	<hgroup>
		<h1><span class="nom">Disseny de base de dades. Pràctica 2</span> Mercè Bauzà Cerezo</h1>
		<div id="logoInfo" align="right"><a href="./info.html"><img src="imatges/info.png"></a></div>
	</hgroup>

</header>

<body>
<h2>Llistat de comentaris</h2>

			
			<?php
			// Obrim Connexió
			include_once("connexio.php");
			
			$idLocal = $_GET["idLocal"];
			echo "<br>"; 
			
			$sql = "SELECT * FROM Comentar WHERE local_ID=$idLocal ORDER BY Data DESC";
			$result=$mysqli->query($sql);
			
			while ($row = mysqli_fetch_object($result)) {	
				$Data = $row->Data;
				$Comentari = $row->Comentari;
				echo $Data;
				echo $Comentari;
				echo "<br>";
			}
			?>

</body>
</html>