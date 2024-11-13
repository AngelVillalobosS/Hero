<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero - Trabajos Realizados</title>
    <link rel="stylesheet" href="../css/works_design.css">
</head>

<body>

    <!-- Encabezado -->
    <header>
        @include('components.navbar')
    </header>

    <!-- Sección de trabajos -->
    <section class="gallery-section">
        <h2>Galería de Trabajos</h2>
        <div class="gallery">
            <div class="gallery-item">
                <img src="trabajo1.jpg" alt="Trabajo 1">
                <p>Restauración completa de auto clásico</p>
            </div>
            <div class="gallery-item">
                <img src="trabajo2.jpg" alt="Trabajo 2">
                <p>Pintura personalizada</p>
            </div>
            <div class="gallery-item">
                <img src="trabajo3.jpg" alt="Trabajo 3">
                <p>Reparación de carrocería</p>
            </div>
            <div class="gallery-item">
                <img src="trabajo4.jpg" alt="Trabajo 4">
                <p>Pulido y encerado</p>
            </div>
            <!-- Agrega más elementos según sea necesario -->
        </div>
    </section>

    <!-- Pie de página -->
    <footer>
        <div class="footer-content">
            <p>&copy; Hero Carrocería y Pintura. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>

</html>