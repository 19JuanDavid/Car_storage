<?php
$ruta_archivo = "coches.txt";

if (!file_exists($ruta_archivo) || filesize($ruta_archivo) == 0) {
    echo "No hay coches registrados";
} else {
    $coches = file($ruta_archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    unset($coches[0], $coches[1]); 
}
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">   
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado de Coches</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container mt-5">
        <h2 class="text-center">Listado de Coches</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año de Fabricación</th>
                    <th>Número de Puertas</th>
                    <th>Combustible</th>
                    <th>Precio (€)</th>
                    <th>Extras</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coches as $linea): ?>
                <?php
                    $datos = explode("\t", $linea);
                    if (count($datos) >= 7): 
                ?>
                <tr>
                    <td><?php echo $datos[1]; ?></td> 
                    <td><?php echo $datos[2]; ?></td> 
                    <td><?php echo $datos[3]; ?></td> 
                    <td><?php echo $datos[4]; ?></td> 
                    <td><?php echo $datos[5]; ?></td> 
                    <td><?php echo $datos[6]; ?></td> 
                    <td><?php echo $datos[7]; ?></td> 
                </tr>
                <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
       </div>

      </body>
      </html>
