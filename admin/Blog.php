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
                            Blogs 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-picture-o"></i> Blogs
                            </li>
                        </ol>
                    </div>
                </div>
                <?php
                    if(isset($_POST['submit']))
                    {
                      $tempName=$_FILES['fileImage']['tmp_name'];
                        CreateNewBlog($_POST['blogname'],$_POST['blogin'],$_POST['blogTags'],$_POST['discription'],$_POST['date'],$_POST['Month'],$tempName);
                    }
                    else if(isset($_GET['Delete']))
                    {
                       DeleteBlog($_GET['Delete']);
                    }

                ?>
                 <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <form action="Blog.php" method="POST" enctype="multipart/form-data">
                                    
                                    <div class="form-group col-sm-6">
                                      <label>Blog Name:</label>
                                      <input type="text" name="blogname" placeholder="Enter Blog Name Here Like : Speed Medicine " class="form-control" required>
                                    </div>
                                    <div class='form-group col-sm-6'>
                                              <label >Blog In :</label>
                                              <input type="text" name="blogin" placeholder="Enter Blog In Here Like : Posted in Health & Care | Medicine " class="form-control" required>
                                  </div>
                                   <div class='form-group col-sm-6'>
                                             <label >Tags :</label>
                                             <select class="form-control" name="blogTags">
                                             	<option value="All">All</option>
                                             	<option value="Web Design">Web Design</option>
                                             	<option value="Branding">Branding</option>
                                             	<option value="Photography">Photography</option>
                                             	<option value="Marketing">Marketing</option>
                                             	<option value="Media">Media</option> 
                                             	<option value="Print">Print</option> 	
                                             </select>
                                  </div>
                                  <div class='form-group col-sm-6'>
                                             <label >Date :</label>
                                             <select class="form-control" name="date">
                                              <option value="01">1</option>
                                              <option value="02">2</option>
                                              <option value="03">3</option>
                                              <option value="04">4</option>
                                              <option value="05">5</option>
                                              <option value="06">6</option> 
                                              <option value="07">7</option> 
                                              <option value="08">8</option>
                                              <option value="09">9</option>
                                              <option value="10">10</option>
                                              <option value="11">11</option>
                                              <option value="12">12</option>
                                              <option value="13">13</option> 
                                              <option value="14">14</option> 
                                              <option value="15">15</option>
                                              <option value="16">16</option> 
                                              <option value="17">17</option> 
                                              <option value="18">18</option>
                                              <option value="19">19</option>
                                              <option value="20">20</option>
                                              <option value="21">21</option>
                                              <option value="22">22</option>
                                              <option value="23">23</option> 
                                              <option value="24">24</option>
                                              <option value="25">25</option>
                                              <option value="26">26</option> 
                                              <option value="27">27</option> 
                                              <option value="28">28</option>
                                              <option value="29">29</option>
                                              <option value="30">30</option> 
                                              <option value="31">31</option>
                                             </select>
                                  </div>
                                  <div class='form-group col-sm-6'>
                                             <label >Date :</label>
                                             <select class="form-control" name="Month">
                                              <option value="January">January</option>
                                              <option value="February">February</option>
                                              <option value="March">March</option>
                                              <option value="April">April</option>
                                              <option value="May">May</option>
                                              <option value="June">June</option> 
                                              <option value="July">July</option> 
                                              <option value="August">August</option>
                                              <option value="September">September</option>
                                              <option value="October">October</option>
                                              <option value="November">November</option>
                                              <option value="December">December</option>
                                             </select>
                                  </div>
                                  <div class='form-group col-sm-6'>
                                              <label >Select Image :</label>
                                             <input type="file" required name="fileImage">
                                  </div>
                                  <div class='form-group col-sm-12'>
                                              <label >Discription :</label>
                                             <textarea name="discription" class="form-control"></textarea>
                                  </div>
                                   
                                    
                                  <div class='form-group col-sm-12 text-center'> <button type="submit" name="submit" class="btn btn-default">Submit</button></div><br/><br/> 
                                  </form>
                                  <div class="form-group col-sm-12">
                                  <h3 align="Center">Blog List</h3>
                                      <?php 
                                        showBlogs();
                                        ?>
                                   </div>
                                </div>
        </div>
        <!-- /#page-wrapper -->


<?php
include ('include/footer.php');
?>