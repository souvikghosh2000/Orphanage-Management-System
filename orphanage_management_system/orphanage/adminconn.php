<?php 
	
$conn = new PDO('mysql:host=localhost;dbname=project', 'root', '');
	 


$username = $_POST['username'];
$password = $_POST['password'];

$query = $conn->query("select * from admin where username = '$username' and password = '$password'");
$count = $query->rowcount();
$row = $query->fetch();
if ($count > 0){
session_start();
$_SESSION['id'] = $row['member_id'];
 header('location:admin.php'); 
}else{
echo "ERROR"; 
}


?>
