<?php 
	
$conn = new PDO('mysql:host=localhost;dbname=project', 'root', '');
	 


$email = $_POST['email'];
$password = $_POST['psw'];

$query = $conn->query("select * from createaccount where email = '$email' and password = '$password'");
$count = $query->rowcount();
$row = $query->fetch();
if ($count > 0){
session_start();
$_SESSION['id'] = $row['member_id'];
 header('location:welcome.php'); 
}else{
echo "ERROR"; 
}


?>
