<?php 
//////////////////////////////// Ofline Db Connection
//mysql_connect('localhost','root','') or die ('could not connect');
//mysql_select_db('db_ufxstudio') or die ('could find database');

/////// Online code
$con=mysqli_connect('localhost','root','','db_ufxstudio');
if($con->connect_error)
{
    echo "Db Connection Error".$con->connect_error;
}
 ?>