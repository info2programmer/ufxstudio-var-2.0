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
				Team 
				</h1>
				<ol class="breadcrumb">
					<li class="active">
					<i class="fa fa-picture-o"></i> Team
					</li>
				</ol>
			</div>
		</div>
		<?php
		if(isset($_POST['submit']))
		{
			$tempName=$_FILES['fileImage']['tmp_name'];
			CreateTeam($_POST['txtName'],$_POST['txtDesignation'],$tempName);
		}
		else if(isset($_GET['Delete']))
		{
			DeleteTeam($_GET['Delete']);
		}

		?>
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<form action="Team.php" method="POST" enctype="multipart/form-data">

							<div class="form-group col-sm-6">
								<label>Name:</label>
								<input type="text" name="txtName" placeholder="Enter Name" class="form-control" required>
							</div>
							<div class='form-group col-sm-6'>
								<label >Designation :</label>
								<input type="text" name="txtDesignation" placeholder="CEO/HR" class="form-control" required>
							</div>
							<div class='form-group col-sm-6'>
								<label >Select Image :</label>
								<input type="file" required name="fileImage">
							</div>
							<div class='form-group col-sm-12 text-center'> <button type="submit" name="submit" class="btn btn-default">Submit</button></div><br/><br/> 
						</form>
						<div class="form-group col-sm-12">
							<h3 align="Center">Team List</h3>
							<?php 
							geteamList();
							?>
						</div>
					</div>
				</div>
				<!-- /#page-wrapper -->


				<?php
				include ('include/footer.php');
				?>