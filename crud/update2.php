<?php 
include("./inc/settings.php");
validar();
?>
<?php 
    $query = "UPDATE _table1 SET column2 = '".$_POST['nombre']."', column3 = '".$_POST['fecha']."', column4 = ".$_POST['numero'].", column5 = ".$_POST['numdouble']." WHERE column1 = ".$_POST['identificador'].";";
//echo $query;

// Create connection
$conn = @pg_connect("host=$servername port=$port dbname=$dbname user=$username password=$password");
// Check connection
if (!$conn) {
  die("Connection failed");
}

if (pg_query($conn,$query)){
    header("location:crud.php");
}else{
    echo "Algo salio mal <a href='https://actividad6-crud.herokuapp.com/crud/'> clic aqui para volver al crud</a>" ;

}
?>