<?php
require_once ('include/header.php');
require_once ('include/side_nav.php');
require_once ('lib/controler.php');
require_once ('lib/db_config.php');
require_once ('lib/viewfunction.php');

//require_once ('lib/db_config.php');

?>




        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Services 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-picture-o"></i> Services
                            </li>
                        </ol>
                    </div>
                </div>
                <?php
                    
                      if(isset($_POST['submit']))
                      {
                          global $con;
                      	$tempName=$_FILES['imagefile']['tmp_name'];
                      	$servicesID=CreateServices($_POST['servicename'],$_POST['sdis'],$tempName,$_POST['dis']);

                      	//multiple image code goes here
                      	for($i=0; $i<count($_FILES['imgMultiple']['name']); $i++)
					  	{
					  		$randChar=md5(rand()).".jpg";
							move_uploaded_file($_FILES['imgMultiple']['tmp_name'][$i], "upload/ServicesMultipleImage/".$randChar) OR die("Image Not save In Move");;

							  $query="INSERT INTO `tbl_servicesimg`(`imgPath`, `Services_id`) VALUES ('".$randChar."','".$servicesID."')";
							  $con->query($query) OR die("Image Not save In Database");
							  $count=$i+1;
							echo "<div class='alert alert-success'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						  		<span aria-hidden='true'>&times;</span>
							</button>
						    <strong>Success!</strong> Image ".$count." upload successfully!
						  </div>";
					     }
                      }
                      else if(isset($_GET['Delete']))
                      {
                      	DeleteServices($_GET['Delete']);
                      }

                ?>
                 <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <form id="form1" action="Services.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group ">
                                      <label>Enter Services Name:
                                      </label> 
                                      <input type="text" name="servicename" placeholder="Enter Services Name Here" class="form-control" required>
                                    </div>
                                     <div class="form-group">
									  <label >Short Description:</label>
									  <textarea class="form-control" name="sdis" rows="5" ></textarea>
									</div>
                                    <div class="form-group ">
                                      <label>Single Image:</label>
                                      <input type="file" name="imagefile" class="form-control" required>
                                    </div>
                                    <div class="form-group ">
                                      <label>Multiple Image:</label>
                                      <input type="file" name="imgMultiple[]" multiple class="form-control" required>
                                    </div>
                                    <div class="form-group">
									  <label >Description:</label>
									  <textarea class="form-control" name="dis" rows="5" ></textarea>
									  <script type='text/javascript'>
										CKEDITOR.replace('dis');
									 </script>
									</div>
                                   <p align="center"> <button type="submit" name="submit" class="btn btn-default">Submit</button></p><br/><br/> 
                                  </form>
                                  <h3 align="Center">Services List</h3>
                                  <div class="form-group col-sm-12">
                                      <?php
                                      	showServices();

                                        ?>
                                   </div>
                                </div>
        </div>
        <!-- /#page-wrapper -->


<?php
include ('include/footer.php');
?>