<?php
include("./inc/settings.php");
validar();
?>
<?php
//print_r($_GET);

$id=$_GET['colum1'];

$query="DELETE FROM _table1 WHERE column1=$id;";

// echo $query;


// Create connection
$conn = @pg_connect("host=$servername port=$port dbname=$dbname user=$username password=$password");
// Check connection
if (!$conn) {
  die("Connection failed");
}

if (pg_query($conn,$query)){
    header("location:crud.php");
}else{
    echo "Algo salio mal <a href='https://localhost/crud/crud.php'> clic aqui para volver al crud</a>" ;

}


?>