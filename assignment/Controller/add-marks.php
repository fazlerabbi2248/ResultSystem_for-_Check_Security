<?php include('security.php'); ?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<?php 

if(isset($_POST['update_btn'])){
	$id = $_POST['id'];


  

       $sql= "select * from memberinformation where id=$id"; 
       $q=mysqli_query($conn,$sql);
       $data= mysqli_fetch_array($q);

}


?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"> ADD Marks </h1>
                    <p class="mb-4">
                   
                          Here you can add marks.
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Marks</h6>
                        </div>
                        <div class="card-body">
                                       <form class="form-horizontal" method="POST" action="save-result.php">

                                        
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Student Name</h5></label>


                                               <input type="text"  name="studentname">                                                

                                                </div>  


                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Semester</h5></label>


                                               <input type="number"  name="semester">                                                

                                                </div>                                              
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">batch
                                              
                                                  </h5></label>


                                               <input type="Number"  name="batch">                                                

                                                </div>


                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">CSE3201</h5></label>


                                               <input type="number"  value="<?php echo $data['lastname']; ?>"  name="CSE3201">                                                

                                                </div>                                                

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">CSE3202</h5></label>


                                               <input type="number" value="<?php echo $data['username']; ?>" id="included-date" name="CSE3202">                                                

                                                </div> 
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">CSE3203</h5></label>


                                               <input type="number"  name="CSE3203">                                                

                                                </div> 
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">CSE3204</h5></label>


                                               <input type="number"  name="CSE3204">                                                

                                                </div> 
                                          

                                          <div class="modal-footer">
                                            
                                              <button type="submit" name="save_btn" class="btn btn-primary">Save</button>
                                          </div>
                                        </form>

                          </div>
                        </div>
                        </div>



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>