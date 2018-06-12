<?php
session_start();
if (@!$_SESSION['usuario']) {
    header("Location:../../index.php");
} elseif ($_SESSION['tipo_usuario'] == 'PRO') {
    //header("Location:index2.php");
    echo "ERES Estudiante";
} elseif ($_SESSION['tipo_usuario'] == 'ADM') {
    echo "eres estudiante";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>

        <meta charset="utf-8"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
        <link rel="stylesheet" href="../../plugins/bootstrap/css/bootstrap.min.css"></link>
        <link href="../../estilos/estilosHerramientas.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="../../plugins/bootstrap/js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
        <title>Proyecto SGOA</title>
    </head>
    

    <body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">Bienvenid@: <strong><?php echo $_SESSION['usuario'] ?></strong></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                     <ul class="nav navbar-nav">
                        <li ><a href="../modulos_estudiante/est_buscar.php">Buscar</a></li>
                        <li class="active"><a href="../modulos_estudiante/est_herramientas.php">Herramientas</a></li>
                        <li class="active"><a href="../modulos_estudiante/est_ayuda.php">Ayuda</a></li>i
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../desconectar_sesion.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--   <div class="container-fluid"  style="background-color: #B0C4DE; color: #fff; height:100px;text-align: center;">
               <h1>SISTEMA DE GESTION DE OBJETOS DE APRENDIZAJE</h1>-->
        </div>

        <!-- --------------------------------------------- -->

        </div>
        </div>
        </div>
        <!-- --------------------------------------------- -->
        <div class="container">
            <div class="row">
                <nav class="col-sm-3" id="myScrollspy">
                    <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
                                                

                    </ul>
                </nav>
                <!-- --------------------INICIO SECCION 1------------------------- -->
                <div class="col-sm-9">
                    <div id="section1">
                        <h1 style="text-align: center; color: #000000;">Ayuda</h1>
                        <div class="container-fluid bg-3 text-center">    
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="../../images/aE1.JPG" class="img-responsive" style="width:100%" alt="Image"></br>
                                        <p style="text-align: justify; color: #000000;">En la primera interfaz que visualizará el estudiante, este se va encontrar con los botenes de Buscar, Herramientas y Ayuda
                                            <br>El botón de Buscar permitirá al estudiante realizar una busqueda de todos los objetos de aprendizaje que se encuentran almacenados</br>
                                            El botón de herramientas desplegara todas aquellas herramientas en el que el estudiante puede realizar objetos de aprendizaje
                                            <br>El botón de Ayuda desplegará una guía de referencia para el estudiante. </br>
                                        </p>
                                </div>
                                <div class="col-sm-12"> 
                                    <img src="../../images/ayes.png" class="img-responsive" style="width:100%" alt="Image"></br></br>
                                        <p style="text-align: justify; color: #000000;">
                                            Para buscar un objeto de aprendizaje el estudiante tiene las opciones de hacerlo por autor, nombre, descripción, institución, palabra clave.
                                            En el lado derecho este ingresará la palabra clave con la cual se realizará la busqueda 
                                            
                                        </p>
                                </div>
                                <div class="col-sm-12"> 
                                    <img src="../../images/ayes1.png" class="img-responsive" style="width:100%" alt="Image"></br>
                                        <p style="text-align: justify; color: #000000;">
                                            En la sección de comentarios el estudiante podrá dejar su opinión acerca del objeto de aprendizaje que se ha descargado 
                                        </p>
                                </div>

                                <div class="col-sm-12"> 
                                    <img src="../../images/aye2.jpg" class="img-responsive" style="width:100%" alt="Image"></br>
                                        <p style="text-align: justify; color: #000000;">
                                            En la siguiente pantalla se visualizará los comentarios que se realizarón en el objeto de aprendizaje 
                                        </p>
                                </div>


                            </div>
                        </div>


                    </div></br>
                    <!-- --------------------INICIO SECCION 4------------------------- -->
                </div>
            </div>

            <!-- --------------------------------------------- -->

            <footer class="container-fluid text-center">
                <p>Diseño y programación: Elsa Vasco, Edison Tamayo, José Criollo</p>
            <p>Colaboración: Samantha De la Cruz, Cynthia Oyana, Alex Morales</p>
            </footer>
            </script>
    </body>

</html>