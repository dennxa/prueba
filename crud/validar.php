<?php
include("./inc/settings.php");
//print_r($_POST);
$query="SELECT * FROM _usuario WHERE employeeid = '$_POST[username]' AND employeepassword = '$_POST[pwd]';";
// echo $query;


// Create connection
//@ arroba suprime los warnings en php.
$conn = @pg_connect("host=$servername port=$port dbname=$dbname user=$username password=$password");
// Check connection
if (!$conn) {
  die("Connection failed ");
}else{
  // echo "Conexion exitosa";
}

$result = pg_query($conn,$query) or die("Algo malio sal      ".pg_last_error($conn));
//print_r($result);
//echo pg_num_rows($result);
// echo $result;

if (pg_num_rows($result) > 0) {
  
  // output data of each row
  $row = pg_fetch_assoc($result);
 // echo "Acceso de usuario validado, redirigiendo a la pagina principal.";
  session_start();
  $_SESSION["nombre"] = $row["employeefirstname"];
  $_SESSION["apellido1"] = $row["employeelastname1"];
  $_SESSION["apellido2"] = $row["employeelastname2"];
  header("location: crud.php");

} else {
  echo "Se detecto un acceso ilegal al sistema, su ip esta siendo monitoreada y sera enviada a la policia";
  ?>
  <a href="https://actividad6-crud.herokuapp.com/crud/">Sitio de login</a>
  <?php
}
pg_close($conn);

?>
