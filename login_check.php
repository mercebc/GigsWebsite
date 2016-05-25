<?php
// Obrim Connexió
include_once("connexio.php");

$username=$_POST['usuari']; 
$password=$_POST['contrasenya'];

$sql="SELECT * FROM Gestor WHERE usuari='$username'";
$result=$mysqli->query($sql);

$count=mysqli_num_rows($result);

if($count==1){
    $row = mysqli_fetch_array($result);
    if ($password == $row['Contrasenya']){
    	$ID = $row['ID'];
     
        header("Location: local.php?usuari=$ID");
    }
    else {
    	$message = "La contrasenya introduida es incorrecta.";
		echo '<script type="text/javascript">alert("'.$message.'");</script>';
		echo("<script>window.location = 'index.php';</script>");
    }
}
else{
	 $message = "Usuari no registrat a la base de dades.";
	echo '<script type="text/javascript">alert("'.$message.'");</script>';
	echo("<script>window.location = 'index.php';</script>");
}
?>