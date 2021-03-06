<?php
session_start();
if (@!$_SESSION['usuario']) {
    header("Location:../../index.php");
} elseif ($_SESSION['tipo_usuario'] == 'PRO') {
//header("Location:index2.php");
    echo "ERES PROFESOR";
} elseif ($_SESSION['tipo_usuario'] == 'EST') {
    echo "ERES ESTUDIANTE";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>

        <meta charset="utf-8"></meta>
        <link rel="stylesheet" href="../../plugins/bootstrap/css/bootstrap.min.css"></link>
        <script type="text/javascript" src="../../plugins/bootstrap/js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
        <title>Proyecto SGOA</title>
    </head>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */ 
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 390px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        html{
            min-height: 100%;
            position: relative;
        }
        body{
            margin:0;
            margin-bottom: 40px;
        }
        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;} 
        }

        .table > tbody > tr > td {
            vertical-align: middle;
        }

    </style>


    <body>
       <?php include './navbar_adm_obj_apr.php';?>
        <!-- Inicio formulario de búsqueda -->

        <!-- presentacion de objetos de aprendizaje-->
        <div class="container-fluid text-center">    
            <div class="row content">
                <!-- --------------------------------------------- -->
                <div class="col-sm-12 text-center"> 
                    <h2> Administración de objetos de aprendizaje</h2>
                    <form action="../modulos_administrador/adm_ejecutar_buscar.php" method="post" enctype="multipart/form-data">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-3 text-left ">
                            <select class= "form-control" name="tipo_criterio" dir="ltr" required>
                                <option value="">Filtrar por:</option>
                                <option value="autor">autor</option>
                                <option value="nombre">nombre</option>
                                <option value="descripcion">descripcion</option>
                                <option value="institucion">institucion</option>
                                <option value="palabras_clave">palabra clave</option>
                            </select></br>
                        </div>
                        <div class="col-md-3 text-center">
                            <input type="text" class="form-control" id="criterio_busqueda" placeholder="Buscar...." name="criterio_busqueda" required></br>
                        </div>
                        <div class="col-md-3 text-left">
                            <button id="registrar" type="submit" class="btn btn-danger">Buscar</button>
                            </br></br>
                        </div>
                    </form>

                    <?php
                    require_once '../clases_negocio/clase_conexion.php';
                    require '../clases_negocio/funciones_oa_profesor.php';
                    $statement = ("select * from objeto_aprendizaje");
                    $conexion = new Conexion();
                    $consulta = $conexion->prepare($statement);
                    $consulta->setFetchMode(PDO::FETCH_ASSOC);
                    $consulta->execute();

                    $id_usuario = $_SESSION['id'];


                    echo '<table border ="1|1" class="table table-condensed";>';
                    echo '<tr class="warning">';
                    //echo '<td>Id</td>';
                    echo '<td>Nombre</td>';
                    echo '<td>Descripción</td>';
                    //echo '<td>idProfesor</td>';
                    echo '<td>Institucion</td>';
                    echo '<td>FechaCreacion</td>';
                    echo '<td>palabras clave</td>';
                    echo '<td>Tamaño</td>';
                    echo '<td>Autor</td>';
                    echo '<td>Comentario</td>';
                    echo '<td>Calificacion</td>';
                    
                    //echo "<td>ruta</td>";
                    echo "</tr>";

                    if ($consulta->rowCount() != 0) {
                        while ($row = $consulta->fetch()) {
                            echo '<tr class="success">';
                            //echo '<td>' . $row['idobjeto_aprendizaje'] . '</td>';
                            echo '<td>' . $row['nombre'] . '</td>';
                            echo '<td>' . $row['descripcion'] . '</td>';
                            //echo '<td>' . $row['id_profesor'] . '</td>';
                            echo '<td>' . $row['institucion'] . '</td>';
                            echo '<td>' . $row['fechaCreacion'] . '</td>';
                            echo '<td>' . $row['palabras_clave'] . '</td>';
                            echo '<td>' . number_format($row['tamanio'] / 1e6, 2, '.', '') . ' MB' . '</td>';
                            if (obtener_tipo_usuario_con_id($row['id_usuario']) == 'ADM') {
                                echo '<td>ADMINISTRADOR</td>';
                            } else {
                                $profesor = obtener_profesor_como_arreglo(obtener_id_profesor_con_id_usuario($row['id_usuario']));
                                echo '<td>' . $profesor['nombres'] . ' ' . $profesor['apellidos'] . '</td>';
                            }
                            //echo '<td>' . $row['ruta'] . '</td>';
                            echo '<td><a href="adm_comentarios.php?id=' . $row['idobjeto_aprendizaje'] . '">' . obtener_nro_comentarios_oa($row['idobjeto_aprendizaje']) . '</a></td>';
                            echo '<td><div class="ec-stars-wrapper">
                                <a href="#" data-value="1" title="Votar con 1 estrellas">1</a>
                                <a href="#" data-value="2" title="Votar con 2 estrellas">2</a>
                                <a href="#" data-value="3" title="Votar con 3 estrellas">3</a>
                                <a href="#" data-value="4" title="Votar con 4 estrellas">4</a>
                                <a href="#" data-value="5" title="Votar con 5 estrellas">5</a></div>
                            </td>';
                            echo '<td><a href="adm_visualizar.php?id=' . $row['idobjeto_aprendizaje'] . '" title="Abrir"><span class="glyphicon glyphicon-folder-open"></a></td>';
                            echo '<td><a href="adm_actualizar_oa.php?id=' . $row['idobjeto_aprendizaje'] . '" title="Actualizar"><span class="glyphicon glyphicon-refresh"></a></td>';
                            echo '<td><a href="'.$row['ruta'].'" title="Descargar"><span class="glyphicon glyphicon-download"></a></td>';
                            echo "<td><a onClick=\"javascript: return confirm('Realmente desea eliminar el objeto de aprendizaje?');\" href='adm_buscar.php?id=" . $row['idobjeto_aprendizaje'] . "&idborrar=2' ><span class='glyphicon glyphicon-remove'></a></td>";
                            echo '</tr>';
                        }
                    }
                    echo '</table>';
                    extract($_GET);
                    if (@$idborrar == 2) {
                        eliminar_objeto_aprendizaje($id);
                        echo '<script>alert("REGISTRO ELIMINADO")</script> ';
                        echo "<script>location.href='adm_buscar.php'</script>";
                    }
                    $conexion = null;
                    ?>

                    <!-- --------------------------------------------- -->

                </div>
            </div>
        </div></br></br></br>
        <footer class="container-fluid text-center">
            <p>Diseño y programación: Elsa Vasco, Edison Tamayo, José Criollo</p>
                <p>Colaboración: Samantha De la Cruz, Cynthia Oyana, Alex Morales</p>
        </footer>
    </body>

</html>

