				<?php include("config.php"); ?>

<nav id="menu">
<?php
            $result = mysqli_query($conn_m, "CALL selectMainMenu_MPrd()");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);
  ?>
            <ul class="links">
            
            <li><a href="<?php echo $row['menu_link']; ?>"><?php echo $row['menu_name']; ?></a></li> 

			
            </ul>
            					<?php } ?>

		</nav>