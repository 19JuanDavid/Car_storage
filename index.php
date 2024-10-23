<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de coches</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Agregar un Coche</h2>
        <form action="controller.php" method="POST">
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" id="marca" name="marca" placeholder="Ej. Ford, BMW, Toyota" required>
            </div>
    
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Ej. Focus, X5, Corolla" required>
            </div>
    
            <div class="form-group">
                <label for="anio_fabricacion">Año de Fabricación:</label>
                <input type="number" class="form-control" id="anio_fabricacion" name="anio_fabricacion" min="1990" max="2024" placeholder="Ej. 2020, 2021, 2022" required>
            </div>
    
            <div class="form-group">
                <label for="num_puertas">Número de Puertas:</label>
                <input type="number" class="form-control" id="num_puertas" name="num_puertas" min="2" max="5" placeholder="Ej. 3, 4, 5" required>
            </div>
    
            <div class="form-group">
                <label for="combustible">Tipo de Combustible:</label>
                <select class="form-control" id="combustible" name="combustible" required>
                    <option value="">Selecciona...</option>
                    <option value="Gasolina">Gasolina</option>
                    <option value="Diésel">Diésel</option>
                    <option value="Eléctrico">Eléctrico</option>
                    <option value="Híbrido">Híbrido</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="precio">Precio (€):</label>
                <input type="number" class="form-control" id="precio" name="precio" placeholder="Ej. 22000, 50000" required>
            </div>
    
            <div class="form-group">
                <label for="extras">Extras:</label>
                <input type="text" class="form-control" id="extras" name="extras" placeholder="Ej. GPS, Cámara trasera, Asientos de cuero" required>
            </div>
            
            <br>

            <button type="submit" class="btn btn-primary">Agregar Coche</button>
        </form>
    </div>
</body>
</html>