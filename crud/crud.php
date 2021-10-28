<?php
include("./inc/settings.php");
validar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Denia Lomas</title>
    <script src="./js/funciones.js"></script> 

    <! --link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" href="./css/estilos.css"> 
</head>

<body>
    Bienvenido a mi crud
    <?= $_SESSION["nombre"]?>
    <?= $_SESSION["apellido1"]?>
    <?= $_SESSION["apellido2"]?>
    <a href="logout.php" >Log out</a>
<?php
// Create connection
$conn = @pg_connect("host=$servername port=$port dbname=$dbname user=$username password=$password");
// Check connection
if (!$conn) {
  die("Connection failed: ");
}

$sql = "SELECT column1, column2, column3, column4, column5 FROM _table1";
$result = pg_query($conn,$sql);
//print_r($result);

if ( pg_num_rows($result) >  0 ) {
  echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Fecha</th><th>Numero</th><th>NumeroDouble</th><th>Eliminar</th><th>Modificar</th></tr>";
  // output data of each row
  while($row = pg_fetch_assoc($result)) {
    echo "\n<tr>\n\t<td>".$row["column1"]."</td>\n\t<td>".$row["column2"]."</td>\n\t<td>".$row["column3"]."</td>\n\t<td>".$row["column4"]."</td>\n\t<td>".$row["column5"]."</td>";
    echo "<td><a href='eliminar.php?colum1=".$row["column1"]."' onclick='return confirmar()'><img src='./img/eliminar.png'></a></td><td>
          <a href='update.php?colum1=".$row["column1"]."' onclick='return confirmarModificar()'><img src='./img/update.png'></td></tr>\n";
  }
  echo "</table>";
} else {
  echo "0 results";
}
pg_close($conn);
?>
<br>
<form action="insertar.php" method="post">

<fieldset style="width:300px">
<legend>Inserte la informacion del nuevo registro</legend>
  Id: <input type="number" name="identificador" id="" value="1975" class="w3-input" required><br>
  Nombre: <input type="text" name="nombre" id="" value="Humberto" class="w3-input"><br>
  Fecha: <input type="date" name="fecha" id="" value="1975-06-23"><br>
  Numero: <input type="number" name="numero" id="" value=""><br> 
  Num.Double: <input type="number" name="numdouble" id="" value=""><br>
  <br>
  <input type="submit" value="Aceptar"><br> 
</fieldset>
</form>

</body>
</html>