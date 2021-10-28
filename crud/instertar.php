<?php

/*print_r($_POST);
echo $_POST["datosId"]."<br>\n";
echo $_POST["datosNombre"]."<br>";
echo $_POST["datosFecha"]."<br>";
echo $_POST["datosNumero"]."<br>";
echo $_POST["datosNumero2"]."<br>";*/
$id = $_POST["datosId"];
$nombre = $_POST["datosNombre"];
$fecha = $_POST["datosFecha"];
$numero = $_POST["datosNumero"];
$numero2= $_POST["datosNumero2"];


$query ="INSERT INTO table1 (column1,column2,column3,column4,column5) 
VALUES ($id,'$nombre','$fecha',$numero,$numero2);";
//printf($query);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databas";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($conn->query($query)){
    header("location: crud.php");
}else{
    echo "Algo salio mal <a href='crud.php'>Acceder a mi crustaceo</a>";
}


?>