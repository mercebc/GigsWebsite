<?php
$comentari = addslashes(htmlspecialchars($_POST['txtArea']));
$usuari = addslashes(htmlspecialchars($_POST['usuari']));
$actuacio = addslashes(htmlspecialchars($_POST['actuacions']));
$local = addslashes(htmlspecialchars($_POST['idLocal']));


// Obrim Connexió
include_once("connexio.php");

date_default_timezone_set('UTC');
$data = date('Y-m-d');

$ssql = "INSERT into Comentar (Data, Comentari, Registre_ID, Actuacio_ID) VALUES ('$data', '$comentari', '$usuari', '$actuacio')";

$final = $mysqli->query($ssql);

?>

<script>
alert("S'ha guardat correctament");
location.href = "comentaris.php?idLocal=<?php echo $local ?>";
</script>