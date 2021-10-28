<?php 

// Settings locales
// $servername = "localhost";
// $username = "postgres";
// $password = "admin";
// $dbname = "pos";
// $port = 5432;

// Settings remotas heroku
$servername = "ec2-34-193-46-89.compute-1.amazonaws.com";
$username = "angnurxqbdhdim";
$password = "f8c3ffd21a020858ecfd4efe26ea4a54cc9a108a0248a974374261224fac0010";
$dbname = "d1bg0gpolqel2t";
$port = 5432;

function validar(){
    session_start();
if (empty($_SESSION["nombre"]))
{
  echo "Se detecto un acceso ilegal al sistema, su ip esta siendo monitoreada y sera enviada a la policia";
  ?>
  <a href="http://localhost/crud-postgres">Sitio de login</a>
  <?php
  exit();
}
}

?>