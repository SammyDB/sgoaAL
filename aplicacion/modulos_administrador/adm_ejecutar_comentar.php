<?php
session_start();
require '../clases_negocio/funciones_oa_profesor.php';
require_once '../clases_negocio/clase_conexion.php';
    $conexion = new Conexion();
$id_objeto_aprendizaje = filter_input(INPUT_POST, 'id_objeto_aprendizaje');
$contenido = filter_input(INPUT_POST, 'contenido');
$Fecha = filter_input(INPUT_POST, 'Fecha');
$Imagen=$_FILES["Foto"]["name"];
$ruta=$_FILES["Foto"]["tmp_name"];
$destino="fotos/".$Imagen;
copy($ruta,$destino);

$statement ='INSERT INTO comentario (contenido,idusuario,id_objeto_aprendizaje,Imagen,Fecha) VALUES (?, ?, ?, ?,?)';
$consulta = $conexion->prepare($statement);
if (insertar_comentario($contenido, $_SESSION['id'], $id_objeto_aprendizaje, $Imagen, $Fecha)) {

    echo '<script charset="UTF-8">alert("Su comentario se inserto correctamente")</script> ';
    echo "<script>location.href='adm_buscar.php'</script>";
} else {
    echo '<script charset="UTF-8">alert("No se pudo insertar su comentario. ")</script> ';
    echo "<script>location.href='adm_buscar.php'</script>";
}

?>
