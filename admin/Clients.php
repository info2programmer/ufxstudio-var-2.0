<?php
require_once ('include/header.php');
require_once ('include/side_nav.php');
require_once ('lib/controler.php');
require_once ('lib/db_config.php');
require_once ('lib/viewfunction.php');



date_default_timezone_set('Asia/Kolkata');//get current date time 
$sent_datetime=date('d-m-Y H:i');//get current date time 


?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                         <h1 class="page-header">
                             Clients
                         </h1>
                         <ol class="breadcrumb">
                             <li class="active">
                                 <i class="fa fa-picture-o"></i> Create New Clients
                             </li>
                         </ol>
                    </div>
                </div>
                <?php
                    if(isset($_POST['submit']))
                    {
                        global $con;
                    	for($i=0; $i<count($_FILES['fileSlider']['name']); $i++)
        					  	{
        					  		$randChar=md5(rand()).".jpg";

        							move_uploaded_file($_FILES['fileSlider']['tmp_name'][$i], "upload/clients/".$randChar) or die("opps multiple picture not uploaded");

        							  $query="INSERT INTO `tbl_clients`(`image`) VALUES ('".mysqli_real_escape_string($con,$randChar)."')";
        							  $result=$con->query($query) OR die("Image Not save In Database");
        							  $container=$i+1;

        							  if($result==true)
        							  {
        							  	echo "<div class='alert alert-success'>
        									<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        								  		<span aria-hidden='true'>&times;</span>
        									</button>
        								    <strong>Success!</strong> Image ".$container."  has been added successfully!
        								  </div>";
        							  }
					     }
                    }

                    else if(isset($_GET['Delete']))
                    {
                      DeleteClient($_GET['Delete']);
                    }
                ?>
                 <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <form action="Clients.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group col-sm-12">
                                      <label>Images:</label>
                                      <input type="file" name="fileSlider[]" multiple class="form-control" required>
                                    </div>
                                   <p align="center"> <button type="submit" name="submit" class="btn btn-default">Submit</button></p><br/><br/> 
                                  </form>
                                  <h3 align="Center">Client List</h3>
                                  <div class="form-group col-sm-12">
                                      <?php 
                                      	viewClientlist();
                                        ?>
                                   </div>
                                </div>
        </div>
        <!-- /#page-wrapper -->
<?php
include ('include/footer.php');
?>