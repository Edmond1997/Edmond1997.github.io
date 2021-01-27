<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("config.php");	
?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>

<head>
	<title>Moduli Perdoruesit</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Header -->
		<header id="header" class="alt"> 
			<nav> <a href="#menu">Menu</a>
			</nav>
		</header>
		<!-- Menu -->
		<?php include_once("nav.php"); ?>
		<!-- Banner -->
		<?php include_once("header.php"); ?>
		<!-- Main -->
		<div id="main" class="alt">
			<!-- One -->
			<section id="one">
				<div class="inner">
					<div class="row">
						<div class="col-6 col-12-medium">
							<form method="post" action="shtoMateriale.php" enctype="multipart/form-data">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">Emri:
										<input type="text" name="Emri" id="Emri"  />
									</div>
									<div class="col-6 col-12-xsmall">Mbiemri:
										<input type="text" name="Mbiemri" id="Mbiemri"  />
									</div>
									<div class="col-6 col-12-xsmall">Email:
										<input type="text" name="Email" id="Email"  />
									</div>
									<div class="col-6 col-12-xsmall">Telefoni:
										<input type="text" name="Telefoni" id="Telefoni"/>
									</div>
									<!-- Break -->
									<div class="col-6 col-12-xsmall">
                                        Lloji Materialit
										<select name="Id_Fush_Mat" id="Id_Fush_Mat">
											<?php
														$res=mysqli_query($conn,"SELECT * FROM umlmi_fushamaterialeve");
														while($row=$res->fetch_array())
														{
															?>
															<option value="<?php echo $row['Id_Fush_Mat']; ?>"><?php echo $row['Departamenti']; ?></option>
															<?php
														}
														?>
										</select>
									</div>
									<!-- Break -->
									<div class="col-6 col-12-xsmall">Materiali
										
										<input type="file" name="file" />
									</div>
									<!-- Break -->
									<div class="col-12">
										<textarea name="Pershkrimi" id="Pershkrimi" placeholder="Pershkrimi"
											rows="6"></textarea>
									</div>
									<!-- Break -->
									<div class="col-12">
										<ul class="actions">
											<li>
												<input type="submit" name="shtoMateriale" value="Dergo" class="primary" />
											</li>
											<li>
												<input type="reset" value="Pastro" />
											</li>
										</ul>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

			<!-- Footer -->
			<?php include_once("footer.php"); ?>
		</div>
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
</body>

</html>