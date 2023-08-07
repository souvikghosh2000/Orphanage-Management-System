<?php
      $username = "root";
      $password = "";
      $servername = "localhost";
      $dbname="project";
      $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql="DELETE FROM childrens WHERE childid=11";
$run=mysqli_query($conn,$sql);
if($run)
{
	echo "your registration has beeen approved";

}
?>
	


	
