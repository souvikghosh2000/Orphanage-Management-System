<?php 
	
$conn = new PDO('mysql:host=localhost;dbname=project', 'root', '');
	 

 
    $username=$_POST['username'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phonenumber=$_POST['pnumber'];
    $password=$_POST['psw'];

    $query=$conn->query("insert into createaccount(username,address,phonenumber,email,password) values('$username','$address','$phonenumber','$email','$password')");
$count = $query->rowcount();
$row = $query->fetch();
if ($count > 0){
session_start();
$_SESSION['id'] = $row['member_id'];
echo "welcome";
 
}else{
echo "ERROR"; 
}
   
    ?>
