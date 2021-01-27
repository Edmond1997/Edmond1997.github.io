

<?php
//including the database connection file
include_once 'config.php';

if(isset($_POST['shtoMateriale']))
 {	
	$Emri =mysqli_real_escape_string($conn,$_POST['Emri']);
	$Mbiemri = mysqli_real_escape_string($conn,$_POST['Mbiemri']);
	
	$Email =mysqli_real_escape_string($conn,filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL));

    $Telefoni = mysqli_real_escape_string($conn,$_POST['Telefoni']);
	$Id_Fush_Mat =mysqli_real_escape_string($conn,$_POST['Id_Fush_Mat']);
	$Pershkrimi = mysqli_real_escape_string($conn,$_POST['Pershkrimi']);
	  
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="materialet/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	// checking empty fields
	if(empty($Emri) || empty($Mbiemri) || empty($Email) || empty($Telefoni) || empty($Id_Fush_Mat)) 



	{			
		if(empty($Emri)) {echo "<font color='red'>Emri field is empty.</font><br/>";}
		if(empty($Mbiemri)) {echo "<font color='red'>Mbiemri field is empty.</font><br/>";}
		if(empty($Email)) {echo "<font color='red'>Email field is empty.</font><br/>";}
	    if(empty($Telefoni)) {echo "<font color='red'>Telefoni field is empty.</font><br/>";}
	    if(empty($Id_Fush_Mat)) {echo "<font color='red'>Id_Fush_Mat field is empty.</font><br/>";}
	    

		//link to the previous mesazhi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } 
    
	else if(move_uploaded_file($file_loc,$folder.$final_file)) 
	{ 

		if (filter_var($Email, FILTER_VALIDATE_EMAIL) === false){
				 echo "<b>$Email</b> nuk eshte adrese valide";
			
				echo "<script>
					 setTimeout(function(){
						window.location.href = 'dergomateriale.php';
					 }, 6000);
				  </script>";
				echo"<p><b>Ju lutem pritni 6 sekonda deri sa te ktheheni ne formen Dergo Materiale. <b></p>";
					}
		else{
		//$sql="INSERT INTO umlmi_materialetderguara(Emri,Mbiemri,Email,Telefoni,Id_Fush_Mat,file,type,size,Pershkrimi) VALUES('$Emri','$Mbiemri','$Email','$Telefoni','$Id_Fush_Mat','$final_file','$file_type','$new_size','$Pershkrimi')";
			//$sql = mysqli_query($conn, "CALL upload_f('$final_file','$file_type','$new_size')");
		$sql = mysqli_query($conn, "CALL insertMaterialetDerguara('$Emri','$Mbiemri','$Email','$Telefoni','$final_file','$file_type','$new_size','$Pershkrimi','$Id_Fush_Mat')");

		mysqli_query($conn, $sql);
		
	echo"	<script>
         setTimeout(function(){
            window.location.href = 'dergomateriale.php';
         }, 5000);
      </script>";
		echo" <p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
		}
		
	}
	
}
?>
    