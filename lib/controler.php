<?php
require_once ('db_config.php');

date_default_timezone_set('Asia/Kolkata');//get current date time 
$sent_datetime=date('d-m-Y H:i');

//This is global variable for sql connection string


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////               SUBMIT CONTACT FROM            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function submitContact($name,$email,$phone,$skype,$reqfor,$message)
{
    global $con;
	$sql="INSERT INTO `tbl_Contact`(`name`, `email`, `phone`, `skype`, `reqfor`, `message`) VALUES ('".mysqli_real_escape_string($con,$name)."','".mysqli_real_escape_string($con,$email)."','".mysqli_real_escape_string($con,$phone)."','".mysqli_real_escape_string($con,$skype)."','".mysqli_real_escape_string($con,$reqfor)."','".mysqli_real_escape_string($con,$message)."')";
	$result=$con->query($sql);
	if($result==true)
	{
		echo "<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  		<span aria-hidden='true'>&times;</span>
				</button>
			    <strong>Success!</strong> Message Send successfully!
			  </div>";
	}
	else
	{
		echo "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Error!</strong> Something wrong! Message Not Send, Our developer team work on it.
		  </div>";
	}
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////               SUBMIT CAREER FROM            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function SubmitCareerForm($name,$Email,$Phone,$For,$Exp,$Qualification,$Institute,$PassingYear,$Percentage,$PreviousCompany,$JobRole,$AdditionalMassage,$CVLink,$realname)
{
	move_uploaded_file($CVLink,"CV_Request/".$realname) or die("Error To upload file");

	global $con;
	$sql="INSERT INTO `tbl_career`(`Name`, `Email`, `Phone`, `Application For`, `Exp`, `Qulification`, `Institute`, `PassingYear`, `Percentage`, `PreviousCompany`, `JobRole`, `AdditionalMassage`, `cvlink`) VALUES ('".mysqli_real_escape_string($con,$name)."','".mysqli_real_escape_string($con,$Email)."','".mysqli_real_escape_string($con,$Phone)."','".mysqli_real_escape_string($con,$For)."','".mysqli_real_escape_string($con,$Exp)."','".mysqli_real_escape_string($con,$Qualification)."','".mysqli_real_escape_string($con,$Institute)."','".mysqli_real_escape_string($con,$PassingYear)."','".mysqli_real_escape_string($con,$Percentage)."','".mysqli_real_escape_string($con,$PreviousCompany)."','".mysqli_real_escape_string($con,$JobRole)."','".mysqli_real_escape_string($con,$AdditionalMassage)."','".mysqli_real_escape_string($con,$realname)."')";
	$result=$con->query($sql);
	if($result==true)
	{
		echo "<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  		<span aria-hidden='true'>&times;</span>
				</button>
			    <strong>Success!</strong> Request Send successfully!
			  </div>";
	}
	else{
		echo "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  	<span aria-hidden='true'>&times;</span>
			</button>
		    <strong>Error!</strong> Something wrong! Request Not Send, Our developer team work on it.
		  </div>";
	}
}






?>