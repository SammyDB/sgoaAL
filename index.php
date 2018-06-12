<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>

        <meta charset="utf-8"></meta>
        <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css"></link>
        <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-responsive.css"></link>
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css"></link>
        <title>Proyecto SGOA</title>
    </head>
    <body>
        <form action="aplicacion/validar.php" method="post">
            <h2 style="color: #0000FF; ">Sistema de Gestión de Objetos de Aprendizaje</h2>
            <h3 style="color: #000080; "><font size="3"> SGOA permite al usuario crear recursos digitales utilizados como apoyo para el aprendizaje <td width="40%" align="rigth" valign="middle">
                    <a href="aplicacion/modulos_comunes/Informacio.php"><font color="red"> Mas Información</font></a></td></font> 
                <br></br>
            <h4 style="color: #800080;"> Inicio de Sesion </h4>
            <select class= "form-control" name="tipo_usuario" dir="ltr" required>
                <option value="">Seleccione tipo de usuario</option>
                <option value="ADM">Administrador</option>
                <option value="PRO">Profesor</option>
                <option value="EST">Estudiante</option>
            </select></br>
            <input class="form-control" type="text" placeholder="&#128104 Usuario" required name="user"></input></br>
            <label></label>
            <input class="form-control" type="password" placeholder="&#128273; Contraseña" required name="pass"></input>
            <label>&nbsp;</label></br>
            <input class="btn btn-primary" type="submit"  value="Aceptar"></br>

            <label></label>
                <label></label>
                <td width="50%"> <a href="aplicacion/formularios_registro/RegistrarProfesor.php"> Registrar Profesor</a></td></br>
                <label></label>
                <td width="50%" align="right" valign="middle"><a href="aplicacion/formularios_registro/RegistrarEstudiante.php"> Registrar Estudiante</a></td>
        </form></br></br>
                  
        </body>
</html>