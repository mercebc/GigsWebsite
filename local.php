<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Discogràfica Merce</title>
	<?php

	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	include_once("gmaps/GoogleMap.php");
	include_once("gmaps/JSMin.php");
	?>


	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="../../../../Downloads/structure.css" type="text/css" />

	

</head>

<header>
	<hgroup>
		<h1><span class="nom">Disseny de base de dades. Pràctica 2</span> Mercè Bauzà Cerezo</h1>
		<div id="logoInfo" ALIGN="right">
			<a href="./info.html"><img src="imatges/info.png"></a></div>
	</hgroup>

</header>

<body>

<?php

// Obrim Connexió
include_once("connexio.php");

$usuari=$_GET["usuari"];

$MAP_OBJECT = new GoogleMapAPI(); $MAP_OBJECT->_minify_js = isset($_REQUEST["min"])?FALSE:TRUE;

// Definim el tamany del mapa
$MAP_OBJECT->setHeight('400');
$MAP_OBJECT->setWidth('800');

$sql = "SELECT ID, latitud, longitud, nom FROM local";
$result=$mysqli->query($sql);

if ( $result->num_rows > 0 ) {
	while ($row = mysqli_fetch_object($result)) {
		$ID = $row->ID;
		$nom = $row->nom;
		$lat = $row->latitud;
		$long = $row->longitud;


$html_info = "<div class=\"globusMapa\">";
$html_info.= "<a target=\"_blank\" href=\"actuacions.php?idLocal=$ID&usuari=$usuari\"><strong>$nom</strong></a><br><br/>";

// indiquem les coordenades a geocodificar
$MAP_OBJECT->addMarkerByCoords($long,$lat,$nom,$html_info,$ID);

	}
}

$url = "http://maps.googleapis.com/maps/api/geocode/json?sensor=false&latlng=";

$sql2="SELECT Usuari FROM Gestor WHERE ID='$usuari'";
$result=$mysqli->query($sql2);
$row = mysqli_fetch_array($result);
$user = $row['Usuari'];

echo $user . ", selecciona un local dels disponibles a la base de dades"; 

echo $MAP_OBJECT->getHeaderJS();
echo $MAP_OBJECT->getMapJS();

?>

<div class="mapa">
	<?php $MAP_OBJECT->printOnLoad();?>
	<?php $MAP_OBJECT->printMap();?>
</div>        

</body>
</html>