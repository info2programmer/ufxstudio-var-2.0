<?php
include ('include/header.php');
include ('include/side_nav.php');
include ('lib/controler.php');
include ('lib/db_config.php');
include ('lib/viewfunction.php');

date_default_timezone_set('Asia/Kolkata');//get current date time 
$sent_datetime=date('d-m-Y H:i');//get current date time 

?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                         <h1 class="page-header">
                             Contact Request
                         </h1>
                         <ol class="breadcrumb">
                             <li class="active">
                                 <i class="fa fa-picture-o"></i> Requests 
                             </li>
                         </ol>
                    </div>
                </div>
                <?php
                    //Message Send Code Goes Here
                ?>
                 <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                  <div class="form-group col-sm-12">
                                      <?php 
                                      	showCareearReq();
                                       ?>
                                   </div>
                                </div>
        </div>
        <!-- /#page-wrapper -->
<?php
include ('include/footer.php');
?>