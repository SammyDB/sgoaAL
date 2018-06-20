<?php
session_start();
require '../clases_negocio/funciones_oa_profesor.php';

if ($_FILES["zip_file"].$row['nombre']) {
    //obtenemos datos de nuestro ZIP
    $nombre = $_FILES["zip_file"].$row['nombre'];
    $ruta = $_FILES["zip_file"].$row['ruta'];
    
    $zip = zip_open($ruta);
    if ($zip) {
        //la función zip_read sirve para leer el contenido de nuestro archivo ZIP
        while ($zip_entry = zip_read($zip)) {
            // la función zip_entry_name devuelve el nombre de cada uno de nuestros archivos. 
            echo "<p>Nombre: " . zip_entry_name($zip_entry) . "<br />\n";
            echo "<br/>";
            /* if(zip_entry_open($zip, $zip_entry))
              {
              echo "Contenido documento: <br/>";
              //la función zip_entry_read lee el contenido del fichero
              $contenido = zip_entry_read($zip_entry);
              print_r($contenido);
              echo "<br/><br/>";
              } */
        }
    }
}
?>