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

        <form action='guarda.php' method='POST' name='formu' id='formulari'>
        
        <span>Actuacions</span>
			
			<?php
			// Obrim Connexió
			include_once("connexio.php");
			
			$idUsuari=$_GET["usuari"];

			echo "<br>"; 
			$idLocal=$_GET["idLocal"];
			echo "<br>";
			
			$sql = "SELECT * FROM interpretar WHERE local_ID=$idLocal ORDER BY ID";
			$result=$mysqli->query($sql);
			while ($row = mysqli_fetch_object($result)) {	
				$ID = $row->ID;	
				echo "<input type='radio' name='actuacions' value='$ID' class='campos'>Actuació $ID</> \n";
				echo "<br>";
			}
			?>

        <?php
          	echo "<label>Comentari</label> \n";
          	echo "<br>";
          	echo "​<textarea id='txtArea' name='txtArea' rows='10' cols='70'></textarea> \n"; 
          	echo "<br>";   
        ?>
      	
        
      	<input type='hidden' name='usuari' value='<?php echo $idUusuari ?>'>
      	<input type='hidden' name='idLocal' value='<?php echo $idLocal ?>'>

         <input type="submit" class="boton" name="nou" value="Envia">
         <input type="reset" class="boton1" name="cancela" value="Neteja">
         <input type="button" class="boton1" name="cancela" value="Cancela" onclick="window.location.href = 'local.php?usuari=<?php echo $idUsuari ?>';">
        </form>
       

</body>
</html>