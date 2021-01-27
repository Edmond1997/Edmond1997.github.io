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
	<title>Moduli i Perdoruesit</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header" class="alt">

			<nav>
				<a href="#menu">Menu</a>
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
				<?php
$visits = 1;

if (isset($_COOKIE["visits"])) {
    $visits = (int)$_COOKIE["visits"];
}    $Month = 2592000 + time();
    //this adds 30 days to the current time
 setcookie("visits", date("F jS - g:i a"), $Month);
	if(isset($_COOKIE['visits']))
    {
    $last = $_COOKIE['visits'];
    echo "<p style='text-align:right;'>Vizita juaj e fundit ishte me: " . $last."</p>";
    }
    else
    {   echo "<p style='text-align:right;'>Vizita juaj e pare ne webaplikacion tone! Ju deshirojme mireseardhje!</p>";    }
 ?> 
                	    
			
                    <div class="row" style="text-align: -webkit-center">
                     <?php
            $result = mysqli_query($conn, "SELECT Titull,file,type,size,image FROM umlmi_materialetshtuara" );

            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
                   
 
						<div class="col-4 col-12-small">
                
							<span class="image fit">

							<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" width="100%" height="100%">'; ?>

                               <h4> <?php echo $Titull; ?></h4> 
								<a href="../moduliadministratorit/materialet/<?php echo $row['file'] ?>" class='button' class='button primary' target="_blank">Shkarko</a>
							</span>
						 
						</div>
						<?php } ?>
					</div>
                   
				</div>
                
			</section>

			<!-- Contact -->


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
</html>