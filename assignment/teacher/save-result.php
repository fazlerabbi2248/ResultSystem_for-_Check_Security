<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['save_btn'])){

		   $name = filter_input(INPUT_POST, 'studentname');
		
	     $semester = filter_input(INPUT_POST, 'semester');
	     $batch = filter_input(INPUT_POST, 'batch');
	     $CSE3201 = filter_input(INPUT_POST, 'CSE3201');
	     $CSE3202= filter_input(INPUT_POST, 'CSE3202');
	     $CSE3203 = filter_input(INPUT_POST, 'CSE3203');
	     $CSE3204 = filter_input(INPUT_POST, 'CSE3204');


       


         if(!empty($name)){
       	if($semester>=1 && $semester<=8){
       		if(!empty($batch) && $batch>=1){
       			if(!empty($CSE3201) && $CSE3201>=0 && $CSE3201<=100 ){
       			 if(!empty($CSE3202) && $CSE3202>=0 && $CSE3202<=100 ){
         			if(!empty($CSE3203) && $CSE3203>=0 && $CSE3203<=100) {
         			  if(!empty($CSE3204) && $CSE3204>=0 && $CSE3204<=100) {
           		  
                    
                    
   $sql = "INSERT INTO marks (student_name,semester, batch, CSE3201,CSE3202,CSE3203,CSE3204) VALUES ('$name','$semester', '$batch', '$CSE3201','$CSE3202','$CSE3203','$CSE3204')";

    	if(mysqli_query($conn, $sql)){


	    
	    
            echo '<script language="javascript">';
            echo 'alert("Successfully added"); location.href="add-marks.php"';
            echo '</script>';
             

        }else{
           echo "failed";   
      }

	
				 
// Close connection
mysqli_close($conn);

       			}
       			else{
       				echo '<script language="javascript">';
                    echo 'alert("Please enter valid marks"); location.href="add-marks.php"';
                   echo '</script>';
       				
       				
       			}
                    
       			}
       			      			else{
       			       				echo '<script language="javascript">';
                    echo 'alert("Please enter valid marks"); location.href="add-marks.php"';
                   echo '</script>';
       			}

                    
       			 }
       			       			else{
       				       				echo '<script language="javascript">';
                    echo 'alert("Please enter valid marks"); location.href="add-marks.php"';
                   echo '</script>';
       			}

                    
       			}
       			      			else{
       				       				echo '<script language="javascript">';
                    echo 'alert("Please enter valid marks"); location.href="add-marks.php"';
                   echo '</script>';
       			}

       		}
       		      			else{
       				       				echo '<script language="javascript">';
                    echo 'alert("Please enter valid batch"); location.href="add-marks.php"';
                   echo '</script>';
       			}

       	}
       	      			else{
       			       				echo '<script language="javascript">';
                    echo 'alert("Please enter valid semester"); location.href="add-marks.php"';
                   echo '</script>';
       			}

       }
             			else{
       			       				echo '<script language="javascript">';
                    echo 'alert("Please enter valid name"); location.href="add-marks.php"';
                   echo '</script>';
       			}     
  



}
?>
