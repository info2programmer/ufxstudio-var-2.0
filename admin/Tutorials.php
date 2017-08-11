<?php
include ('include/header.php');
include ('include/side_nav.php');
include ('lib/controler.php');
include ('lib/db_config.php');
include ('lib/viewfunction.php');



?>




        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tutorials 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-picture-o"></i> Tutorials
                            </li>
                        </ol>
                    </div>
                </div>
                <?php
                    if(isset($_POST['submit']))
                    {
                        $tempName=$_FILES['imagefile']['tmp_name'];
                        CreateTutoral($tempName,$_POST['youtubelink']);
                    }
                    else if(isset($_GET['Delete']))
                    {
                       DeleteTutorials($_GET['Delete']);
                    }

                ?>
                 <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <form action="Tutorials.php" method="POST" enctype="multipart/form-data">
                                    
                                    <div class="form-group col-sm-6">
                                      <label>Cover Image:</label>
                                      <input type="file" name="imagefile" class="form-control" required>
                                    </div>
                                    <div class='form-group col-sm-6'>
                                              <label >Youtube Link :</label>
                                              <input type='text' name='youtubelink' class='form-control' placeholder='Pest Your Link Here Like: https://www.youtube.com/watch?v=9MLH17UwRBA'  required>
                                  </div>
                                   
                                    
                                   <p align="center"> <button type="submit" name="submit" class="btn btn-default">Submit</button></p><br/><br/> 
                                  </form>
                                  <h3 align="Center">Tutorial List</h3>
                                  <div class="form-group col-sm-12">
                                      <?php 
                                        showTutorials();
                                        ?>
                                   </div>
                                </div>
        </div>
        <!-- /#page-wrapper -->


<?php
include ('include/footer.php');
?>