<?php
// URL del JSON
$jsonUrl = "https://datos.vigo.org/data/trafico/parkings-ocupacion.json";

// Obtención y decodificación del JSON
$data = file_get_contents($jsonUrl);
$parkings = json_decode($data, true);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Ocupación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
        }
        h1 {
            color: #004080;
        }
        .table {
            background-color: #e6f7ff;
        }
        .table th {
            background-color: #004080;
            color: white;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #d9ecff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Estado de los Parkings</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Plazas Libres</th>
                    <th>Total de Plazas</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($parkings)): ?>
                    <?php foreach ($parkings as $parking): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($parking['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($parking['plazaslibres']); ?></td>
                            <td><?php echo htmlspecialchars($parking['totalplazas']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center">No hay datos disponibles</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
