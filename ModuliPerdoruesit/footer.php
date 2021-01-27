				<?php include("config.php"); ?>

<footer id="footer">
				<div class="inner">
					<div class="row">
						<div class="col-4 col-12-medium">
                     <?php
            $result = mysqli_query($conn_f,"CALL procHeaderFooter('Footer_Telefoni')"); //"SELECT * FROM umlmi_tedhenat WHERE PageLayout='Footer_Telefoni'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>

							<section>
                            
								<div class="contact-method">
									<span class="icon solid alt fa-phone"></span>
									<h3><?php echo $Titulli ?></h3>
									<span><?php echo $Pershkrimi; ?></span>
								</div>
                               
							</section>
                             <?php } ?>
                           

						</div>
						<div class="col-4 col-12-medium">
                        <?php
            $result = mysqli_query($conn,"CALL procHeaderFooter('Footer_Email')"); //"SELECT * FROM umlmi_tedhenat WHERE PageLayout='Footer_Email'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
							<section>
								<div class="contact-method">
									<span class="icon solid alt fa-envelope"></span>
									<h3><?php echo $Titulli ?></h3>
									<a href="#"><?php echo $Pershkrimi; ?></a>
								</div>
							</section>
                            <?php }?>
						</div>

						<div class="col-4 col-12-medium">
                        			<?php
            $result = mysqli_query($conn_h, "CALL procHeaderFooter('Footer_RrjeteSociale')");//"SELECT * FROM umlmi_tedhenat WHERE PageLayout='Footer_RrjeteSociale'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
							<section>
							<h3><?php echo $Titulli ?></h3>

								<ul class="icons">
									<?php echo $Pershkrimi; ?>
								</ul>



							</section>
						</div>
                        <?php } ?>
					</div>
            <?php
            $result = mysqli_query($conn_ff,"CALL procHeaderFooter('Footer_CopyRight')");// "SELECT * FROM umlmi_tedhenat WHERE PageLayout='Footer_CopyRight'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>

					<ul class="copyright">
						
						<li><?php echo $Pershkrimi; ?></li>
					</ul>
                    <?php } ?>
				</div>
			</footer>