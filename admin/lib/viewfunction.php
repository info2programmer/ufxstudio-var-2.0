<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
require_once ('db_config.php');





////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    			Show Portfolio 							 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function showPortfolio()
{
    global $con;
	$sql="SELECT * FROM `tbl_portfolio`";
	$result=$con->query($sql);


	if($result->num_rows>0)
	{
		echo " <table class='table table-bordered'>
	              <tr>
	                  <th>Portfolio Type</th>
	                  <th>Category</th>
	                  <th>Image Thambel</th>
	                  <th>Video Link(Optional)</th>
	                  <th>Delete</th>
	              </tr>";
	    while ($row=$result->fetch_assoc()) {
	    	echo "
	    		 <tr>
                  <td>".$row['type']."</td>
                  <td>".$row['category']."
                  </td>
                  <td><img src='upload/Portfolio/".$row['imgpath']."' class='img-thumbnail' height='auto' width='150px' /></td>
                  <td>".$row['youtubelink']."</td>
                  <td><a href='Portfolio.php?Delete=".base64_encode($row['id'])."' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i>
Delete</a></td>
              </tr>

	    	";
	    }
	    echo "</table>";
	}
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    			Show HomeImage 							 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		

function showImage()
{
    global $con;
	$sql="SELECT * FROM `tbl_imageslider`";
	$result=$con->query($sql);


	if($result->num_rows>0)
	{
		echo " <table class='table table-bordered'>
	              <tr>
	                  <th>Image Thambel</th>
	                  <th>Delete</th>
	              </tr>";
	    while ($row=$result->fetch_assoc()) {
	    	echo "
	    		 <tr>
                  <td><img src='upload/imageslider/".$row['imagepath']."' class='img-thumbnail' height='auto' width='150px' /></td>
                  <td><a href='HomeSlider.php?Delete=".base64_encode($row['id'])."' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i>
Delete</a></td>
              </tr>

	    	";
	    }
	    echo "</table>";
	}
}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    			Show Contact 			/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function showContactReq()
{
    global $con;
	$sql="SELECT * FROM `tbl_Contact` ORDER BY `id` DESC";
	$result=$con->query($sql);


	if($result->num_rows>0)
	{
		echo " <table class='table table-bordered'>
	              <tr>
	                  <th>Name</th>
	                  <th>Email</th>
	                  <th>Phone</th>
	                  <th>Skype</th>
	                  <th>Request For</th>
	                  <th>Message</th>

	              </tr>";
	    while ($row=$result->fetch_assoc()) {
	    	echo "
	    		 <tr>
	    		 	<td>".$row['name']."</td>
	    		 	<td>".$row['email']."</td>
	    		 	<td>".$row['phone']."</td>
	    		 	<td>".$row['skype']."</td>
	    		 	<td>".$row['reqfor']."</td>
	    		 	<td>".$row['message']."</td>
                  
                 </tr>

	    	";
	    }
	    echo "</table>";
	}
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    			Show Careear 			/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function showCareearReq()
{
    global $con;
	$sql="SELECT * FROM `tbl_career` ORDER BY `id` DESC";
	$result=$con->query($sql);


	if($result->num_rows>0)
	{
		echo " <table class='table table-bordered'>
	              <tr>
	                  <th>Name</th>
	                  <th>Email</th>
	                  <th>Phone</th>
	                  <th>Post Applied For</th>
	                  <th>Year Of Exp </th>
	                  <th>Highest Qulification</th>
	                  <th>Institute Name</th>
	                  <th>Passing Year</th>
	                  <th>Marks Percentage</th>
	                  <th>Previous Company Name</th>
	                  <th>Job Role</th>
	                  <th>Additional Massage</th>
	                  <th>CV</th>


	              </tr>";
	    while ($row=$result->fetch_assoc()) {
	    	echo "
	    		 <tr>
	    		 	<td>".$row['Name']."</td>
	    		 	<td>".$row['Email']."</td>
	    		 	<td>".$row['Phone']."</td>
	    		 	<td>".$row['Application For']."</td>
	    		 	<td>".$row['Exp']."</td>
	    		 	<td>".$row['Qulification']."</td>
	    		 	<td>".$row['Institute']."</td>
	    		 	<td>".$row['PassingYear']."</td>
	    		 	<td>".$row['Percentage']."</td>
	    		 	<td>".$row['PreviousCompany']."</td>
	    		 	<td>".$row['JobRole']."</td>
	    		 	<td>".$row['AdditionalMassage']."</td>
                  	<td><a href='../CV_Request/".$row['cvlink']."' target='_blank'>Download</a></td>
                 </tr>

	    	";
	    }
	    echo "</table>";
	}
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    			Show Careear 			/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function showNewsLetter()
{
    global $con;
	$sql="SELECT * FROM `tbl_newsletter` ORDER BY `id` DESC";
	$result=$con->query($sql);
	if($result->num_rows>0)
	{
		echo " <table class='table table-bordered'>
	              <tr>
	                  <th>Date</th>
	                  <th>Email</th>
	              </tr>";
	    while($row=$result->fetch_assoc())
	    {
	    	echo "<tr>
	    		<td>".$row['datetime']."</td>
	    		<td>".$row['email']."</td>
	    		</tr>
	    	";
	    }
	    echo "</table>";
	}
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    			Show Services 							 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
function showServices()
{
    global $con;
	$sql="SELECT * FROM `tbl_sevices` ";
	$result=$con->query($sql);
	if($result->num_rows>0)
	{
		echo " <table class='table table-bordered'>
	              <tr>
	                  <th>Name</th>
	                  <th>Image</th>
	                  <th>View</th>
	                  <th>Delete</th>
	              </tr>";
	    while($row=$result->fetch_assoc())
	    {
	    	echo "<tr>
	    		<td>".$row['Name']."</td>
	    		<td><img src='upload/ServicesCoverImages/".$row['ImgPath']."' class='img-thumbnail' height='auto' width='150px' /></td>
	    		<td>View Link Will Be here</td>
	    		<td><a href='Services.php?Delete=".base64_encode($row['id'])."' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></td>
	    		</tr>
	    	";
	    }
	    echo "</table>";
	}
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    			Show Tutorials 							 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
function showTutorials()
{
    global $con;
	$sql="SELECT * FROM `tbl_tutorlas` ";
	$result=$con->query($sql);
	if($result->num_rows>0)
	{
		echo " <table class='table table-bordered'>
	              <tr>
	                  <th>Image</th>
	                  <th>YouTube Link</th>
	                  <th>Delete</th>
	              </tr>";
	    while($row=$result->fetch_assoc())
	    {
	    	echo "<tr>
	    		<td><img src='upload/TutorialCover/".$row['imgLink']."' class='img-thumbnail' height='auto' width='150px' /></td>
	    		<td><a href='".$row['youtube']."' target='_blank'>Link</a></td>
	    		<td><a href='Tutorials.php?Delete=".base64_encode($row['id'])."' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></td>
	    		</tr>
	    	";
	    }
	    echo "</table>";
	}
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    			Show Blog 							 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
function showBlogs()
{
    global $con;
	$sql="SELECT * FROM `tbl_blog` ";
	$result=$con->query($sql);
	if($result->num_rows>0)
	{
		echo " <table class='table table-bordered'>
	              <tr>
	                  <th>Blog Name</th>
	                  <th>Blog Date</th>
	                  <th>Blog In</th>
	                  <th>Tag</th>
	                  <th>Discription</th>
	                  <th>Delete</th>
	              </tr>";
	    while($row=$result->fetch_assoc())
	    {
	    	echo "<tr>
	    		<td>".$row['BlogName']."</td>
                  <td>".$row['BlogDate']."</td>
                  <td>".$row['BlogIn']."</td>
                  <td>".$row['Tag']."</td>
                  <td>".$row['Discription']."</td>
                  <td><a href='Blog.php?Delete=".base64_encode($row['id'])."' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></td>
	    		</tr>
	    	";
	    }
	    echo "</table>";
	}
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////				View Client list   			///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function viewClientlist()
{
    global $con;
	$sql="SELECT * FROM `tbl_clients`";
	$result=$con->query($sql);
	if($result->num_rows>0)
	{
		echo "<table class='table table-bordered'>
			<tr>
              <th>Image</th>
          	</tr>
		";
		 while($row=$result->fetch_assoc())
	    {
	    	echo "<tr>
	    		<td><img src='upload/clients/".$row['image']."' class='img-thumbnail' height='auto' width='150px' /></td>
                  <td><a href='Clients.php?Delete=".base64_encode($row['id'])."' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></td>
	    		</tr>
	    	";
	    }
	    echo "</table>";
	}
}

//This Function To Get All Team List

function geteamList(){
    global $con;
	$sql="SELECT * FROM `tbl_team`";
	$result=$con->query($sql);
	if($result->fetch_assoc())
	{
		echo "<table class='table table-bordered'>
			<tr>
              <th>Name</th>
              <th>Designation</th>
              <th>Image</th>
              <th>Action</th>
          	</tr>
		";
		 while($row=$result->fetch_assoc())
	    {
	    	echo "<tr>
	    		<td>".$row['name']."</td>
	    		<td>".$row['designation']."</td>
	    		<td><img src='upload/Team/".$row['image']."' class='img-thumbnail' height='auto' width='150px' /></td>
                  <td><a href='Team.php?Delete=".base64_encode($row['id'])."' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></td>
	    		</tr>
	    	";
	    }
	    echo "</table>";
	}
}

//This Function To Get All Testimonial List

function geTestimonialteamList(){
    global $con;
	$sql="SELECT * FROM `tbl_testimonial`";
	$result=$con->query($sql);
	if($result->num_rows>0)
	{
		echo "<table class='table table-bordered'>
			<tr>
              <th>Name</th>
              <th>Designation</th>
              <th>Image</th>
              <th>Action</th>
          	</tr>
		";
		 while($row=$result->fetch_assoc())
	    {
	    	echo "<tr>
	    		<td>".$row['name']."</td>
	    		<td>".$row['comment']."</td>
	    		<td><img src='upload/Testimonial/".$row['image']."' class='img-thumbnail' height='auto' width='150px' /></td>
                  <td><a href='testimonial.php?Delete=".base64_encode($row['test_id'])."' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></td>
	    		</tr>
	    	";
	    }
	    echo "</table>";
	}
}

?>