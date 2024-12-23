<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>C&P | HERO</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    @vite(['resources/css/main.css', 'resources/css/modal-styles.css', 'resources/css/animations.css'])
    @vite(['resources/js/scroll.js'])
    <!-- Estilos CSS -->
</head>

<body class="homepage is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header-wrapper">
            <!-- Navbar componente -->
             <div class="container">
                @include('components.navbar')
            </div>
            <!-- Banner -->
            <div id="banner">
                <h2><strong>HERO |</strong> Carroceria y Pintura
                    <br />
                    "Tu auto nuevo, de nuevo"
                </h2>
                <p>Te invitamos a darte una vuelta en nuestra web!</p>
                <a href="#main-wrapper" class="button large icon solid fa-check-circle">A darle!!</a>
            </div>
        </div>

        <!-- Main Wrapper -->
        <div id="main-wrapper">
            <div class="wrapper style1">
                <div class="inner">

                    <!-- Feature 1 -->
                    <section class="container box feature1">
                        <div class="row">
                            <div class="col-12">
                                <header class="first major">
                                    <h2>¿En qué somos buenos?</h2>
                                    <p>Descubre en qué podemos <strong>asombrarte</strong> ...</p>
                                </header>
                            </div>

                            <!-- Equipo de Trabajo -->
                            <div class="col-4 col-12-medium">
                                <section>
                                    <a href="#" class="image featured" onclick="showWorkTeam(event)"><img src="{{ asset('../resources/images/pic_workteam.jpg') }}" alt="Imagen de un equipo de trabajo mecanico " /></a>
                                    <header class="second icon solid fa-user">
                                        <h3>Equipo de Trabajo</h3>
                                        <p>Conócenos!!</p>
                                    </header>
                                </section>
                            </div>

                            <!-- Nuestros Precios -->
                            <div class="col-4 col-12-medium">
                                <section>
                                    <a href="#" class="image featured" onclick="showPrices(event)"><img src="{{ asset('../resources/images/pic_prices.jpeg') }}" alt="Imagen de un billete de 500 pesos mexicanos" /></a>
                                    <header class="second icon solid fa-cog">
                                        <h3>Nuestros Precios</h3>
                                        <p>¡Checa nuestros costos!</p>
                                    </header>
                                </section>
                            </div>

                            <!-- Galería -->
                            <div class="col-4 col-12-medium">
                                <section>
                                    <a href="right-sidebar.html" class="image featured"><img src="{{ asset('../resources/images/pic_galery.jpg') }}" alt="Imagen de un auto derrapando en el desierto" /></a>
                                    <header class="second icon solid fa-chart-bar">
                                        <h3>Galería</h3>
                                        <p>Dale un vistazo a nuestro trabajo</p>
                                    </header>
                                </section>
                            </div>

                            <div class="col-12">
                                <p>Conoce a nuestro equipo de trabajo, descubre nuestros precios y visita nuestros trabajos más relevantes.</p>
                            </div>
                        </div>
                    </section>

                    <!-- Ventana Emergente - Equipo de Trabajo -->
                    <div id="workTeamModal" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeWorkTeam()">&times;</span>
                            <img src="{{ asset('../resources/images/conocenos.jpg') }}" alt="Equipo de Trabajo" />
                        </div>
                    </div>

                    <!-- Ventana Emergente - Nuestros Precios -->
                    <div id="pricesModal" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closePrices()">&times;</span>
                            <h3>Precios de Nuestros Servicios</h3>
                            <table border="1">
                                <tr>
                                    <th>Trabajo</th>
                                    <th>A partir de </th>
                                </tr>
                                <tr>
                                    <td>Pintura</td>
                                    <td>$200</td>
                                </tr>
                                <tr>
                                    <td>Ojalatería</td>
                                    <td>$150</td>
                                </tr>
                                <tr>
                                    <td>Reparaciones</td>
                                    <td>$100</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="wrapper style2">
                <div class="inner">

                    <!-- Feature 2 -->
                    <section class="container box feature2">
                        <div class="row">
                            <div class="col-6 col-12-medium">
                                <section>
                                    <header class="major">
                                        <h2>Transformación y Estilo</h2>
                                        <p>Brindamos soluciones integrales para el cuidado de la carrocería y pintura de tu automóvil. </p>
                                    </header>
                                    <p>Nuestro compromiso con la calidad y el detalle asegura que tu vehículo recupere su aspecto original o luzca aún mejor. Ya sea que necesites una reparación menor, un trabajo de pintura personalizado o una restauración completa, tenemos la experiencia y las herramientas necesarias para hacerlo.</p>
                                    <footer>

                                    </footer>
                                </section>
                            </div>
                            <div class="col-6 col-12-medium">
                                <section>
                                    <header class="major">
                                        <h2>Renueva tu vehículo con un toque de excelencia</h2>
                                        <p>Deja que tu automóvil brille como nuevo con nuestro servicio especializado en carrocería y pintura.</p>
                                    </header>
                                    <p>Cada detalle importa, y nosotros nos encargamos de que tu vehículo luzca impecable, con acabados que perduran.</p>
                                    <footer>

                                    </footer>
                                </section>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            <div class="wrapper style3">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-8 col-12-medium">

                                <!-- Article list -->
                                <section class="box article-list">
                                    <h2 class="icon fa-file-alt">Actualizaciones Recientes</h2>

                                    <!-- Excerpt -->
                                    <article class="box excerpt">
                                        <a href="#" class="image left"><img src="{{ asset('../resources/images/pic04.jpg') }}" alt="Reparación de carrocería" /></a>
                                        <div>
                                            <header>
                                                <span class="date">Octubre 5</span>
                                                <h3><a href="#">Restauración de pintura y detalles finos</a></h3>
                                            </header>
                                            <p>Recientemente completamos un proyecto donde restauramos la pintura original de un vehículo clásico, devolviéndole su brillo y detalles impecables. Usamos técnicas avanzadas para asegurar que cada capa de pintura se aplicara con precisión.</p>
                                        </div>
                                    </article>

                                    <!-- Excerpt -->
                                    <article class="box excerpt">
                                        <a href="#" class="image left"><img src="{{ asset('../resources/images/pic05.jpg') }}" alt="Reparación de carrocería" /></a>
                                        <div>
                                            <header>
                                                <span class="date">Agosto 1</span>
                                                <h3><a href="#">Reparación de daños por impacto</a></h3>
                                            </header>
                                            <p>En este proyecto, nos encargamos de reparar los daños causados por un impacto en la carrocería de un automóvil. Utilizamos herramientas de última generación para alinear las partes afectadas y restaurar su forma original.</p>
                                        </div>
                                    </article>

                                    <!-- Excerpt -->
                                    <article class="box excerpt">
                                        <a href="#" class="image left"><img src="{{ asset('../resources/images/pic06.jpg') }}" alt="Revisión de carrocería" /></a>
                                        <div>
                                            <header>
                                                <span class="date">Julio 25</span>
                                                <h3><a href="#">Servicio de revisión de carrocería y pintura</a></h3>
                                            </header>
                                            <p>En Hero, ofrecemos revisiones detalladas de carrocería y pintura para garantizar que tu vehículo mantenga un excelente estado. Nuestros expertos inspeccionan minuciosamente cada área y proporcionan soluciones para cualquier desperfecto.</p>
                                        </div>
                                    </article>

                                </section>

                            </div>
                            <div class="col-4 col-12-medium">

                                <!-- Spotlight -->
                                <section class="box spotlight">
                                    <h2 class="icon fa-file-alt">Sobre Nosotros</h2>
                                    <article>
                                        <a href="#" class="image featured"><img src="{{ asset('../resources/images/pic07.jpg') }}" alt="Restauración de carrocería" /></a>
                                        <header>
                                            <h3><a href="#">Un viaje lleno de pasión, compromiso y dedicación.</a></h3>
                                            <p>Restaura la esencia de tu automóvil con una pintura impecable.</p>
                                        </header>
                                        <p>En Hero, nos especializamos en la restauración de vehículos clásicos. Utilizamos técnicas avanzadas para devolverles a los autos su aspecto original, brindando un acabado de pintura que resalta y dura por muchos años. Cada proyecto es una obra maestra, trabajando con precisión y cuidado.</p>
                                        <p>Desde la reparación de pequeños rasguños hasta la restauración completa de carrocería, nos aseguramos de que cada detalle sea perfeccionado para que tu automóvil luzca como nuevo.</p>
                                        <footer>
                                            <a href="#" class="button alt icon solid fa-file-alt">Seguir Leyendo</a>
                                        </footer>
                                    </article>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Wrapper -->
        <div id="footer-wrapper">
            <footer id="footer" class="container">
                <div class="row">
                    <div class="col-3 col-6-medium col-12-small">



                        <!-- Contact -->
                        <section>
                            <h2>contactanos</h2>
                            <div>
                                <div class="row">
                                    <div class="col-12 col-12-small">
                                        <dl class="contact">
                                            <dt>Twitter</dt>
                                            <dd><a href="#">@heroZoDa</a></dd>
                                            <dt>Facebook</dt>
                                            <dd><a href="#">facebook.com/heroZoDa</a></dd>
                                            <dt>WWW</dt>
                                            <dd><a href="#">Hero.com</a></dd>
                                            <dt>correo</dt>
                                            <dd><a href="emailto:herozoda74@gmail.com">herozoda74@gmail.com</a></dd>
                                        </dl>
                                    </div>
                                    <div class="col-12 col-12-small">
                                        <dl class="contact">
                                            <dt>Dirección</dt>
                                            <dd>
                                                1234 Fictional Rd<br />
                                                Nashville, TN 00000-0000<br />
                                                USA
                                            </dd>
                                            <dt>teléfono</dt>
                                            <dd>(656) 215-8542</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                    <div class="col-12">
                        <div id="copyright">
                            <ul class="menu">
                                <li>&copy; HeroZoda. All rights reserved</li>
                                <li>Template by: <a href="http://html5up.net">HTML5 UP</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- Scripts JavaScript -->
    <script>
        // Función para mostrar la ventana del equipo de trabajo
        function showWorkTeam() {
            document.getElementById("workTeamModal").style.display = "block";
        }

        // Función para cerrar la ventana del equipo de trabajo
        function closeWorkTeam() {
            document.getElementById("workTeamModal").style.display = "none";
        }

        // Función para mostrar la ventana de precios
        function showPrices() {
            document.getElementById("pricesModal").style.display = "block";
        }

        // Función para cerrar la ventana de precios
        function closePrices() {
            document.getElementById("pricesModal").style.display = "none";
        }

        // Cerrar las ventanas si el usuario hace clic fuera de ellas
        window.onclick = function(event) {
            if (event.target == document.getElementById("workTeamModal")) {
                closeWorkTeam();
            }
            if (event.target == document.getElementById("pricesModal")) {
                closePrices();
            }
        }
    </script>

</body>

</html>