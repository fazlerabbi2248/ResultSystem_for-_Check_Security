<?php include('security.php'); ?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

  <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">GYM Member </h1>
                    <p class="mb-4">
                    	Here we are showing member information
                    </p>
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">GYM Member  </h6>
                        </div>
                            


                        
                        <div class="card-body">
                                                          <div class="table-responsive">
                                <table class="table table-bordered table-striped table-dark" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Username</th>
                                            <th>Age</th>
                                            <th>Email</th>
                                             <th>Mobile No</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Username</th>
                                            <th>Age</th>
                                            <th>Email</th>
                                             <th>Mobile No</th>
                                         </tr>
                                    </tfoot>
                                    <tbody>
                                          
                                         
                                         <?php  include("conn.php"); ?>


                                                  <?php
 
                                                       
                                                      $sql= "select * from memberinformation"; 
                                                      $Q=mysqli_query($conn,$sql);
                                                      while($data=mysqli_fetch_assoc($Q)){
                                                  ?>
                                                  <tr>
                                                      <td><?php echo $data['firstname'];?></td>
                                                      <td><?= $data['lastname']; ?></td>
                                                      <td><?= $data['username']; ?></td>
                                                      <td><?= $data['age']; ?></td>
                                                      <td><?= $data['email']; ?></td>
                                                      <td><?= $data['mobile']; ?></td>
                                                      
                                                    </tr>
                                                    <?php } ?>                                     
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
    </div>



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>