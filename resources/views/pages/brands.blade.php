<!DOCTYPE HTML>
<html>

<head>
    <title>HERO | Nuestra Historia</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
	@vite(['../resources/css/main.css', '../resources/css/modal-styles.css', '../resources/css/animations.css'])
    <style>
    /* Estilos personalizados para el catálogo */
    .catalogo {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
    }

    .marca {
        width: 250px;
        height: 300px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .marca:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .marca img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .marca h3 {
        margin: 10px;
        text-align: center;
        color: #444;
    }

    .marca p {
        margin: 0 10px 10px;
        text-align: center;
        color: #666;
    }
    </style>
</head>

<body class="no-sidebar is-preload">
<div id="header-wrapper">
        <header class="container">
            @include('components.navbar')
        </header>
    </div>
    <!-- Main Wrapper -->
    <div id="main-wrapper">
        <div class="wrapper style2">
            <div class="inner">
                <div class="container">
                    <div id="content">
                        <!-- Content -->
                        <article>
                            <header class="major">
                                <h2>¡Marcas que manejamos!</h2>
                                <p>Encuentra tus marcas automotrices favoritas.</p>
                            </header>
                            <div class="catalogo">
                                <!-- Marca 1 -->
                                <div class="marca">
                                    <img src="https://brandemia.org/sites/default/files/inline/images/toyota_logo_antes.jpg"
                                        alt="Toyota">
                                    <h3>Toyota</h3>
                                    <p>Innovación y confianza.</p>
                                </div>
                                <!-- Marca 2 -->
                                <div class="marca">
                                    <img src="https://static.vecteezy.com/system/resources/previews/020/500/376/non_2x/ford-brand-logo-car-symbol-black-design-usa-automobile-illustration-free-vector.jpg"
                                        alt="Ford">
                                    <h3>Ford</h3>
                                    <p>Construido para durar.</p>
                                </div>
                                <!-- Marca 3 -->
                                <div class="marca">
                                    <img src="https://hips.hearstapps.com/hmg-prod/images/bmw-2020-logo-1583420702.png"
                                        alt="BMW">
                                    <h3>BMW</h3>
                                    <p>El placer de conducir.</p>
                                </div>
                                <!-- Marca 4 -->
                                <div class="marca">
                                    <img src="https://thumbs.dreamstime.com/b/tesla-logo-editorial-ilustrativo-sobre-fondo-blanco-icono-vectorial-logotipos-iconos-conjunto-redes-sociales-banner-plano-vectores-210442018.jpg"
                                        alt="Tesla">
                                    <h3>Tesla</h3>
                                    <p>El futuro de la movilidad.</p>
                                </div>
                                <!-- Marca 5 -->
                                <div class="marca">
                                    <img src="https://static.vecteezy.com/system/resources/previews/020/498/756/non_2x/honda-logo-brand-symbol-black-with-name-red-design-japan-car-automobile-illustration-free-vector.jpg"
                                        alt="Honda">
                                    <h3>Honda</h3>
                                    <p>El poder de los sueños.</p>
                                </div>
                                <!-- Marca 6 -->
                                <div class="marca">
                                    <img src="data:image/png;base64,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"
                                        alt="Nissan">
                                    <h3>Nissan</h3>
                                    <p>Impulsando el futuro.</p>
                                </div>
                                <!-- Marca 7 -->
                                <div class="marca">
                                    <img src="https://i.pinimg.com/564x/9b/9d/ab/9b9dab2c3be076d4d567aff94a2da7a1.jpg"
                                        alt="Chevrolet">
                                    <h3>Chevrolet</h3>
                                    <p>Encuentra nuevos caminos.</p>
                                </div>
                                <!-- Marca 8 -->
                                <div class="marca">
                                    <img src="https://static.vecteezy.com/system/resources/previews/020/500/396/non_2x/kia-logo-brand-symbol-black-design-south-korean-car-automobile-illustration-free-vector.jpg"
                                        alt="Kia">
                                    <h3>Kia</h3>
                                    <p>El poder de sorprender.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>