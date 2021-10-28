<?php 

// Settings locales
// $servername = "localhost";
// $username = "postgres";
// $password = "admin";
// $dbname = "pos";
// $port = 5432;

// Settings remotas heroku
$servername = "ec2-35-170-123-64.compute-1.amazonaws.com";
$username = "idtncsxzrudcim";
$password = "228c5226acae95b18c57d6b190b4d19c7f81b1156fd1bfc9dd30899fe269e009";
$dbname = "dc94kto2ud1ds";
$port = 5432;

function validar(){
    session_start();
if (empty($_SESSION["nombre"]))
{
  echo "Se detecto un acceso ilegal al sistema, su ip esta siendo monitoreada y sera enviada a la policia";
  ?>
  <a href="https://actividad6-crud.herokuapp.com/crud/">Sitio de login</a>
  <?php
  exit();
}
}

?>