<!DOCTYPE HTML>
<html>
	<head>
		<title>Hero | Agendar-Cita</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		@vite(['../resources/css/main.css'])
		<style>
			#agendar-cita-container {
				display: flex;
				justify-content: center;
				align-items: center;
				min-height: 80vh;
			}
			#agendar-cita {
				background: #f5f5f5;
				padding: 30px;
				border-radius: 10px;
				box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
				max-width: 1000px;
				width: 100%;
				margin: 20px;
				
			}
			#agendar-cita h2 {
				text-align: center;
			}
			#agendar-cita label {
				display: block;
				margin-top: 10px;
			}
			#agendar-cita input, #agendar-cita textarea, #agendar-cita button {
				width: 100%;
				margin-top: 5px;
				padding: 10px;
				border: 1px solid #ddd;
				border-radius: 5px;
			}
			#agendar-cita button {
				background-color: #4CAF50;
				color: white;
				cursor: pointer;
			}
			#agendar-cita button:hover {
				background-color: #45a049;
			}
		</style>
	</head>
	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Encabezado -->
			<div id="header-wrapper">
        <header class="container">
            @include('components.navbar')
        </header>
    </div>
			<!-- Main Wrapper -->
			<div id="agendar-cita-container">
				<section id="agendar-cita">
					<h2>Agendar Cita</h2>
					<form action="/submit" method="post">
						<label for="nombre">Nombre:</label>
						<input type="text" id="nombre" name="nombre" required>

						<label for="email">Correo Electrónico:</label>
						<input type="email" id="email" name="email" required>

						<label for="fecha">Fecha:</label>
						<input type="date" id="fecha" name="fecha" required>

						<label for="hora">Hora:</label>
						<input type="time" id="hora" name="hora" required>

						<label for="comentarios">Comentarios:</label>
						<textarea id="comentarios" name="comentarios"></textarea>

						<button type="submit">Enviar</button>
					</form>
				</section>
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
														<dd><a href="#">@untitled-corp</a></dd>
														<dt>Facebook</dt>
														<dd><a href="#">facebook.com/untitled</a></dd>
														<dt>WWW</dt>
														<dd><a href="#">untitled.tld</a></dd>
														<dt>Email</dt>
														<dd><a href="#">user@untitled.tld</a></dd>
													</dl>
												</div>
												<div class="col-12 col-12-small">
													<dl class="contact">
														<dt>Address</dt>
														<dd>
															1234 Fictional Rd<br />
															Nashville, TN 00000-0000<br />
															USA
														</dd>
														<dt>Phone</dt>
														<dd>(000) 000-0000</dd>
													</dl>
												</div>
											</div>
										</div>
									</section>

							</div>
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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

	</body>
</html>