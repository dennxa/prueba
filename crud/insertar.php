<?php
include("./inc/settings.php");
validar();
/*print_r ($_POST)."<br>";
echo $_POST ['identificador']."<br>\n";
echo $_POST ['nombre']."<br>\n";
echo $_POST ['fecha']."<br>\n";
echo $_POST ['numero']."<br>\n";
echo $_POST ['numdouble']."<br>\n";*/

$identificador=$_POST ['identificador'];
$nombre=$_POST ['nombre'];
$fecha=$_POST ['fecha'];
$numero=$_POST ['numero'];
$numdouble=$_POST ['numdouble'];

$query="INSERT INTO _table1 (column1, column2, column3, column4, column5) VALUES ($identificador, '$nombre', '$fecha', $numero, $numdouble);";
//echo $query;



// Create connection
$conn = @pg_connect("host=$servername port=$port dbname=$dbname user=$username password=$password");
// Check connection
if (!$conn) {
  die("Connection failed");
}

if ( pg_query($conn,$query)== TRUE){
    header("location: crud.php");
}else{
    echo "Algo salio mal <a href='https://actividad6-crud.herokuapp.com/crud/'> clic aqui para volver al crud</a>" ;

}


?>
