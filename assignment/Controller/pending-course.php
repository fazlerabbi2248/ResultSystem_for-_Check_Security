<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>



                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Pending Course</h1>
                    <p class="mb-4">
                     

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-success">
                            <h6 class="m-0 font-weight-bold text-primary">Aprroved Course Marks</h6>
                        </div>
                        <div class="card-body">

                                                          <table class="table table-bordered table-striped table-light" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Student name </th>
                                            <th>Semester</th>
                                            <th>Batch</th>
                                            <th>CSE3201</th>
                                            <th>CSE3202</th>
                                            <th>CSE3203</th>
                                            <th>CSE3204</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tfoot class="bg-dark">
                                        <tr class="text-light">
                                            <th>Student name </th>
                                            <th>Semester</th>
                                            <th>Batch</th>
                                            <th>CSE3201</th>
                                            <th>CSE3202</th>
                                            <th>CSE3203</th>
                                            <th>CSE3204</th>
                                            <th>Action</th>                                        </tr>
                                    </tfoot>
                                    <tbody>
                                          
                                         
                                         <?php  include("conn.php"); ?>


                                                  <?php
 
                                                       
                                                      $sql= "select * from marks"; 
                                                      $Q=mysqli_query($conn,$sql);
                                                      while($data=mysqli_fetch_assoc($Q)){
                                                  ?>
                                                  <tr class="text-dark">
                                                      <td><?php echo $data['student_name'];?></td>
                                                       <td><?php echo $data['semester'];?></td>
                                                      <td><?php echo $data['batch']?></td>
                                                      <td><?php echo $data['CSE3201']?></td>
                                                      <td><?php echo $data['CSE3202']?></td>
                                                       <td><?php echo $data['CSE3203']?></td>
                                                        <td><?php echo $data['CSE3204']?></td>
                                                       
                                                                                                                  <td  >
                                                            <form action="confirm-marks.php" method="post">
                                                              <input type="hidden" name="marks_id" value="<?php echo $data['marks_id']; ?>">
                                                              <button type="submit" name="confirm_btn" class="btn btn-light"><i class="fas fa-check"></i></button>
                                                              <button type="submit" name="delete_btn" class="btn btn-light"><i class="fas fa-trash"></i></button>

                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>                                     
                                    </tbody>
                                </table>


                     </div>
                     </div>
                     </div>




<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>