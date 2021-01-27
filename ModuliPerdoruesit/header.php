				
                <?php
            $result = mysqli_query($conn_h,"CALL procHeaderFooter('Header')"); //"SELECT * FROM umlmi_tedhenat WHERE PageLayout='Header'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
       <section id="banner" class="major" style="background-image: url('<?php echo $File ?>');">
            <div class="inner">
                <header class="major">
                    <h1><?php echo $Titulli ?></h1>
                </header>
                <div class="content">
                    <?php echo $Pershkrimi ?>
                </div>
            </div>
        </section>
        <?php } ?>