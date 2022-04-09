<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['confirm_btn'])){

	


      $id = $_POST['marks_id'];

       $sql= "select * from marks where marks_id='$id'"; 
       $q=mysqli_query($conn,$sql);
       $data= mysqli_fetch_array($q);
       
       $student_name = $data['student_name'];
       echo "$student_name";
     
        $student_name = $data['student_name'];
       $semester = $data['semester'];
       $batch = $data['batch'];
       $CSE3201 = $data['CSE3201'];
       $CSE3202 = $data['CSE3202'];
       $CSE3203 = $data['CSE3203'];
       $CSE3204 = $data['CSE3204'];


       $assign = "INSERT INTO appmarks (student_name,semester, batch, CSE3201,CSE3202,CSE3203,CSE3204) VALUES ('$student_name','$semester', '$batch', '$CSE3201','$CSE3202','$CSE3203','$CSE3204')";


       if(mysqli_query($conn, $assign)){

        $delete = "DELETE FROM marks WHERE marks_id='$id'";

        mysqli_query($conn, $delete);
       
        echo '<script language="javascript">';
           echo 'alert("confirm successfully "); location.href="pending-course.php"';
            echo '</script>';
             
      } else{
            echo "ERROR: Could not able to execute $assign. " . mysqli_error($conn);
         }
mysqli_close($conn);





}

if(isset($_POST['delete_btn'])){

  


      $id = $_POST['marks_id'];

 




        $delete = "DELETE FROM marks WHERE marks_id='$id'";

        if(mysqli_query($conn, $delete)){

       
        echo '<script language="javascript">';
            echo 'alert("confirm successfully "); location.href="pending-course.php"';
            echo '</script>';
          }else{
                echo "error in deleting";
          }
    
mysqli_close($conn);





}

?> 
