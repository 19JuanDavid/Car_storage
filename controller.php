<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ruta_archivo = "coches.txt";
    
 
    if (!file_exists($ruta_archivo)) {
        $file = fopen($ruta_archivo, "w"); 
        if (!$file) {
            die("Error: No se pudo crear el archivo. Verifique los permisos del directorio.");
        }
        fwrite($file, "Marca\tModelo\tAño\tPuertas\tCombustible\tPrecio\tExtras" . PHP_EOL);
        fclose($file);
    }

 
    $file = fopen($ruta_archivo, "a");
    if (!$file) {
        die("Error: No se pudo abrir el archivo. Verifique los permisos y la existencia del archivo.");
    }

    $marca = $_POST['marca'] ?? '';
    $modelo = $_POST['modelo'] ?? '';
    $anio_fabricacion = $_POST['anio_fabricacion'] ?? '';
    $num_puertas = $_POST['num_puertas'] ?? '';
    $combustible = $_POST['combustible'] ?? '';
    $precio = $_POST['precio'] ?? '';
    $extras = $_POST['extras'] ?? '';

    if (!empty($marca) && !empty($modelo) && !empty($anio_fabricacion) && !empty($num_puertas) && !empty($combustible) && !empty($precio) && !empty($extras)) {
   
        $num_registros = count(file($ruta_archivo)) - 2; 
        
        $num_registros++;
        fwrite($file, "$num_registros.\t$marca\t$modelo\t$anio_fabricacion\t$num_puertas\t$combustible\t$precio\t$extras" . PHP_EOL);
        fwrite($file, str_repeat("-", 120) . PHP_EOL);  
        fclose($file); 
        
    } else {
        echo "No se enviaron los datos correctamente.";
    }

    header('Location: vista_coches.php');
}

exit();

?>