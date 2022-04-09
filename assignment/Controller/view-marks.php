<?php
 function fetch_data()  
 {  
      include("conn.php");
      $output = '';  

                                    $sql = "SELECT * FROM  appmarks "; 
    
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["student_name"].'</td>  
                          <td>'.$row["semester"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CSE3201"].'</td>  
                          <td>'.$row["CSE3202"].'</td> 
                          <td>'.$row["CSE3203"].'</td> 

                          <td>'.$row["CSE3204"].'</td>   
                     </tr>  
                          ';  
      }  
      return $output;  
 }
  if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">Student Marks Details</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                                           <th>Student name </th>
                                            <th>Semester</th>
                                            <th>Batch</th>
                                            <th>CSE3201</th>
                                            <th>CSE3202</th>
                                            <th>CSE3203</th>
                                            <th>CSE3204</th> 
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      ob_end_clean();
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }
?>

<?php include('security.php'); ?>
<?php  include("includes/header.php"); ?>
<?php  include("includes/navbar.php"); ?>



                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Confirmed Marks </h1>
                    <p class="mb-4">
                      Here we are showing Confirmed Marks From director

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-success">
                            <h6 class="m-0 font-weight-bold text-primary">Marks</h6>
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
                                             
                                    </tfoot>
                                    <tbody>
                                          
                                         
                                         <?php  include("conn.php"); ?>


                                                  <?php
 
                                                       
                                                      $sql= "select * from appmarks"; 
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

                                                    </tr>
                                                    <?php } ?>                                     
                                    </tbody>
                                </table>
                                                          <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                     </form>


                     </div>
                     </div>
                     </div>




<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>

