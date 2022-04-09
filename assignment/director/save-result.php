<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['save_btn'])){

		   $name = filter_input(INPUT_POST, 'studentname');


		
	     $semester = filter_input(INPUT_POST, 'semester');
	     $batch = filter_input(INPUT_POST, 'batch');
	     $CSE3201 = filter_input(INPUT_POST, 'CSE3201');
	     $CSE3202= filter_input(INPUT_POST, 'CSE3202');
	     $CSE3203 = filter_input(INPUT_POST, 'CSE3204');

//validation 

       if(!empty($name)){
       	if(!empty($semster) && $semester>=1 && $semester<=8){
       		if(!empty($batch) && $batch>=1){
       			if(!empty($CSE3201) && $CSE3201>=0 && $CSE3201<=100 ){
       			 if(!empty($CSE3202) && $CSE3202>=0 && $CSE3202<=100 ){
         			if(!empty($CSE3203) && $CSE3203>=0 && $CSE3203<=100) {
         			  if(!empty($CSE3204) && $CSE32014>=0 && $CSE3204<=100) {
           		  
                    
       			}
       			else{
       				echo "Please enter valid marks";
       			}
                    
       			}
       			      			else{
       				echo "Please enter valid marks";
       			}

                    
       			 }
       			       			else{
       				echo "Please enter valid marks";
       			}

                    
       			}
       			      			else{
       				echo "Please enter valid marks";
       			}

       		}
       		      			else{
       				echo "Please enter valid semester";
       			}

       	}
       	      			else{
       				echo "Please enter valid batch";
       			}

       }
             			else{
       				echo "Please enter a name";
       			}

  










}
?>
