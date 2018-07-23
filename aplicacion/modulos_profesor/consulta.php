<?php
require("conexion.php");
$prove = mysqli_real_escape_string($con, $_POST["idfacultad"]);
$query = 'SELECT * FROM materia WHERE idfacultad = "'.$prove.'"';
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
{
    echo '<option value="' .$row["id_materia"]. '">' .$row["materia"]. '</option>';
}
mysqli_close($con);
?>

