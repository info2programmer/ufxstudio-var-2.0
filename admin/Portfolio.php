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
                            Portfolio 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-picture-o"></i> Portfolio
                            </li>
                        </ol>
                    </div>
                </div>
                <?php
                    if(isset($_POST['submit']))
                    {
                        $tempName=$_FILES['imagefile']['tmp_name'];
                        if(isset($_POST['youtubelink']))
                        {
                           $value=$_POST['youtubelink'];
                        }
                        else
                        {
                            $value="N/A";
                        }
                        createPortfolio($_POST['ptype'],$_POST['category'],$tempName,$value);
                    }
                    else if(isset($_GET['Delete']))
                    {
                        DeletePortfolio($_GET['Delete']);
                    }

                ?>
                 <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <form id="form1" action="Portfolio.php" method="get">
                                    <div class="form-group col-sm-12">
                                      <label>Select Type:
                                      </label> <br/>
                                      <?php
                                        if(isset($_GET['type']))
                                        {
                                           $value=$_GET['type'];
                                           if($value=="Image")
                                           {
                                             echo "<input type='radio' name='type' value='Image' checked  onclick='PostBack()'> Image &nbsp;";
                                             echo "<input type='radio' name='type' value='Video'  onclick='PostBack()'> Video &nbsp;";
                                           }
                                           else
                                           {
                                             echo "<input type='radio' name='type' value='Image'   onclick='PostBack()'> Image &nbsp";
                                             echo "<input type='radio' name='type' value='Video' checked onclick='PostBack()'> Video &nbsp";
                                           }
                                        }
                                        else
                                        {
                                            echo "<input type='radio' name='type' value='Image' checked onclick='PostBack()'> Image &nbsp
                                      <input type='radio' name='type' value='Video'  onclick='PostBack()'> Video &nbsp";
                                        }
                                      ?>
                                    </div>
                                    </form>
                                    <form action="Portfolio.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group col-sm-6">
                                      <label>Select Category:
                                      </label> 
                                        <select class="form-control" name="category">
                                              <option value="3d">3D Architechture</option>
                                              <option value="infogr">Infographic</option>
                                              <option value="einv">E Invitation</option>
                                              <option value="graphics">Graphics</option>
                                              <option value="branding">Logo</option>
                                              <option value="video">Video Production</option>
                                              <option value="intune">InTune</option>
                                         </select> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                      <label>Image:</label>
                                      <input type="file" name="imagefile" class="form-control" required>
                                    </div>
                                    <?php
                                        if(isset($_GET['type']) && $_GET['type']=="Video" )
                                        {

                                            echo "
                                              <div class='form-group col-sm-12'>
                                              <label >Youtube Link :</label>
                                              <input type='text' name='youtubelink' class='form-control' placeholder='Pest Your Link Here Like: https://www.youtube.com/watch?v=9MLH17UwRBA'  required>
                                            </div>
                                            ";
                                        }

                                    ?>
                                    <input type="hidden" name="ptype" value="<?php if(isset($_GET['type'])) {echo $_GET['type'];} else { echo "Image";} ?>">
                                   <p align="center"> <button type="submit" name="submit" class="btn btn-default">Submit</button></p><br/><br/> 
                                  </form>
                                  <h3 align="Center">Portfolio List</h3>
                                  <div class="form-group col-sm-12">
                                      <?php showPortfolio();  ?>
                                   </div>
                                </div>
        </div>
        <!-- /#page-wrapper -->

<script>
    function PostBack()
    {
        document.getElementById("form1").submit();
    }
</script>
<?php
include ('include/footer.php');
?>