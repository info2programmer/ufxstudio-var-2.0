<?php
require_once ('db_config.php');

date_default_timezone_set('Asia/Kolkata');//get current date time 
$sent_datetime=date('d-m-Y');//get current date time 




////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////Create New Portfolio////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



function createPortfolio($type,$category,$img,$youtube)
{
    global $con;
	$rand=md5(rand()).".jpg";
	move_uploaded_file($img,"upload/Portfolio/".$rand) or die("Error To upload file");


	$sql="INSERT INTO `tbl_portfolio`(`category`,`type`, `imgpath`, `youtubelink`, `datetime`) VALUES ('".mysqli_real_escape_string($con,$category)."','".mysqli_real_escape_string($con,$type)."','".mysqli_real_escape_string($con,$rand)."','".mysqli_real_escape_string($con,$youtube)."','".mysqli_real_escape_string($con,date('d-m-Y H:i'))."')";
	$result=$con->query($sql);
	if($result==true)
	{
		echo "<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  		<span aria-hidden='true'>&times;</span>
				</button>
			    <strong>Success!</strong> Portfolio has been added successfully!
			  </div>";
	}
	else
	{
		echo "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Error!</strong> Something went wrong!
		  </div>";
	}
}




////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    			Delete Portfolio 				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function DeletePortfolio($id)
{
    global $con;
	$sql="DELETE FROM `tbl_portfolio` WHERE `id`='".base64_decode($id)."'";
	$result=$con->query($sql);
	if($result==true)
	{
		echo "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Deleted!</strong> Portfolio Deleted
		  </div>";
	}
	else
	{
		echo "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Error!</strong> Portfolio Deleted
		  </div>";
	}
}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    			Delete ImageSlider 				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function DeleteImage($id)
{
    global $con;
	$sql="DELETE FROM `tbl_imageslider` WHERE `id`='".base64_decode($id)."'";
	$result=$con->query($sql);
	if($result==true)
	{
		echo "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Deleted!</strong> Portfolio Deleted
		  </div>";
	}
	else
	{
		echo "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Error!</strong> Portfolio Deleted
		  </div>";
	}
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    		Create New Services				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function CreateServices($name,$shortDiscription,$SingleImage,$Discription)
{
    global $con;
	$randChar=md5(rand()).".jpg";
    move_uploaded_file($SingleImage,"upload/ServicesCoverImages/".$randChar) or die("Error To upload file");

	$sql="INSERT INTO `tbl_sevices`(`Name`, `ShortDiscription`, `ImgPath`, `Discription`) VALUES ('".mysqli_real_escape_string($con,$name)."','".mysqli_real_escape_string($con,$shortDiscription)."','".$randChar."','".mysqli_real_escape_string($con,$Discription)."')";
	$con->query($sql) or die("<script>alert('Some Problem is occurd,Contact your IT team')</script>");

		echo "<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  		<span aria-hidden='true'>&times;</span>
				</button>
			    <strong>Success!</strong> Services has been added successfully!
			  </div>";
			  return   mysqli_insert_id($con);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    		Delete Services				///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function DeleteServices($id)
{
	$id=base64_decode($id);
    global $con;
	$sql1="DELETE FROM `tbl_sevices` WHERE `id`='".mysqli_real_escape_string($con,$id)."' ";
	$sql2="DELETE FROM `tbl_servicesimg` WHERE `Services_id`='".mysqli_real_escape_string($con,$id)."' ";
	$con->query($sql1);
	$con->query($sql2);

	echo "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Sucess!</strong> Services Deleted
		  </div>";
}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    		Create New Tuorials				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function CreateTutoral($SingleImage,$YoutubeLink)
{
	$randChar=md5(rand()).".jpg";
    move_uploaded_file($SingleImage,"upload/TutorialCover/".$randChar) or die("Error To upload file");
    global $con;
	$sql="INSERT INTO `tbl_tutorlas`( `imgLink`, `youtube`) VALUES ('".mysqli_real_escape_string($con,$randChar)."','".mysqli_real_escape_string($con,$YoutubeLink)."')";

	$con->query($sql) or die("<script>alert('Some Problem is occurd,Contact your IT team')</script>");

		echo "<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  		<span aria-hidden='true'>&times;</span>
				</button>
			    <strong>Success!</strong> Tutorial has been added successfully!
			  </div>";
			  
}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    		Delete Tuorials				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function DeleteTutorials($id)
{
	$id=base64_decode($id);
	global $con;

	$query="DELETE FROM `tbl_tutorlas` WHERE `id`='".$id."'";
	$con->query($query);
	echo "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Sucess!</strong> Tutorials Deleted.
		  </div>";

}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    		Create New Blog				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function CreateNewBlog($blogName,$blogin,$tags,$discription,$Date,$Year,$Img)
{
    global $con;
	$randChar=md5(rand()).".jpg";
    move_uploaded_file($Img,"upload/BlogImage/".$randChar) or die("Error To upload file");
	

	$query="INSERT INTO `tbl_blog`(`BlogName`, `BlogDate`, `BlogIn`, `Tag`, `Date`, `Year`, `Discription`,ImgPath) VALUES ('".mysqli_real_escape_string($con,$blogName)."','".mysqli_real_escape_string($con,date('d-m-Y'))."','".mysqli_real_escape_string($con,$blogin)."','".mysqli_real_escape_string($con,$tags)."','".mysqli_real_escape_string($con,$Date)."','".mysqli_real_escape_string($con,$Year)."','".mysqli_real_escape_string($con,$discription)."','".mysqli_real_escape_string($con,$randChar)."')";

	$con->query($query) or die('error query');
	echo "<div class='alert alert-success'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Sucess!</strong> Blog Added .
		  </div>";

}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   		Delete Blog				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function DeleteBlog($id)
{
	global $con;
	$id=base64_decode($id);

	$query="DELETE FROM `tbl_blog` WHERE `id`= '".$id."' ";

	$con->query($query) or die('Error');

	echo "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Sucess!</strong> Blog Deleted.
		  </div>";

}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   		Delete Client				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function DeleteClient($id)
{
    global $con;
	$id=base64_decode($id);

	$query="DELETE FROM `tbl_clients` WHERE `id`= '".$id."' ";

	$con->query($query) or die('Error');

	echo "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Sucess!</strong> Blog Deleted.
		  </div>";
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// This Function For Insert Team /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function CreateTeam($txtName,$txtDesignation,$tmpName){

	$randChar=md5(rand()).".jpg";
    move_uploaded_file($tmpName,"upload/Team/".$randChar) or die("Error To upload file");
    global $con;
    $query="INSERT INTO `tbl_team`(`name`, `designation`, `image`) VALUES ('".mysqli_real_escape_string($con,$txtName)."','".mysqli_real_escape_string($con,$txtDesignation)."','".mysqli_real_escape_string($con,$randChar)."')";

	$con->query($query) or die('error query');
	echo "<div class='alert alert-success'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Sucess!</strong> Team Member Added .
		  </div>";
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// This Function For Insert Team /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function CreateTestimonial($txtName,$txtDesignation,$tmpName){

	$randChar=md5(rand()).".jpg";
    move_uploaded_file($tmpName,"upload/Testimonial/".$randChar) or die("Error To upload file");
    global $con;
    $query="INSERT INTO `tbl_testimonial`(`name`, `comment`, `image`) VALUES ('".mysqli_real_escape_string($con,$txtName)."','".mysqli_real_escape_string($con,$txtDesignation)."','".mysqli_real_escape_string($con,$randChar)."')";

	$con->query($query) or die('error query');
	echo "<div class='alert alert-success'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Sucess!</strong> Team Member Added .
		  </div>";
}


//This Function To Delete Team Member
function DeleteTeam($id)
{
    global $con;
	$id=base64_decode($id);

	$query="DELETE FROM `tbl_team` WHERE `id`= '".$id."' ";

	$con->query($query) or die('Error');

	echo "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Sucess!</strong> Blog Deleted.
		  </div>";

}

//This Function To Delete Testimonial
function DeleteTestimonial($id)
{
	$id=base64_decode($id);
    global $con;
	$query="DELETE FROM `tbl_testimonial` WHERE `test_id`= '".$id."' ";

	$con->query($query) or die('Error');

	echo "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Sucess!</strong> Testimonial Deleted.
		  </div>";

}

?>