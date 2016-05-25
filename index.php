<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Discogràfica Merce</title>

	<link rel="stylesheet" href="../../../../Downloads/structure.css" type="text/css" />
	

</head>

<header>
	<hgroup>
		<h1><span class="nom">Disseny de base de dades. Pràctica 2</span></h1>
		<div id="logoInfo" align="right"><a href="./info.html"><img src="imatges/info.png"></a></div>
	</hgroup>

</header>

<body>

        <form action='login_check.php' method='POST' name='formu' id='formulari'>
          
        <?php
        	
        	echo "<label>Usuari</label> \n";
          	echo "<input name='usuari' type='text' class='campos' /> \n"; 
          	echo "<br>";
          	echo "<label>Contrasenya</label> \n";
          	echo "<input name='contrasenya' type='text' class='campos' /> \n"; 
          	echo "<br>"; 
  
        ?>
      
         <input type="submit" class="boton" name="nou" value="Entra">
         <input type="reset" class="boton1" name="cancela" value="Cancela">
        </form>
        

</body>
</html>