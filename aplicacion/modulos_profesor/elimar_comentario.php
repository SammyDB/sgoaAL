<?php
session_start();
if (@!$_SESSION['usuario']) {
    header("Location:../../index.php");
} elseif ($_SESSION['tipo_usuario'] == 'EST') {
    //header("Location:index2.php");
    echo "eres estudiante";
} elseif ($_SESSION['tipo_usuario'] == 'ADM') {
    echo "eres estudiante";
}
?>
        <?php
        require_once '../clases_negocio/clase_conexion.php';
        require '../clases_negocio/funciones_oa_profesor.php';
        $id_objeto_aprendizaje = filter_input(INPUT_GET, 'id');
        //extract($_GET);
        $objeto_de_aprendizaje = obtener_oa_como_arreglo($id_objeto_aprendizaje);
        ?>
                    $statement = "delete * from comentario where idcomentario=?";
                    $conexion = new Conexion();
                    $consulta = $conexion->prepare($statement);
                    $consulta->setFetchMode(PDO::FETCH_ASSOC);
                    $consulta->execute([$id_objeto_aprendizaje]);



                    
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

