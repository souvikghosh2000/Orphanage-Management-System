
	 


<?php 
	
$conn = new PDO('mysql:host=localhost;dbname=project', 'root', '');
	 

    $name=$_POST['name'];
    $email=$_POST['email'];    
    $phonenumber=$_POST['phonenumber'];
    $orphanage=$_POST['orphanage'];
    $amount=$_POST['amount'];
    $query=$conn->query("insert into donation(name,email,phonenumber,orphanage,amount) values('$name','$email','$phonenumber','$orphanage','$amount')");
$count = $query->rowcount();
$row = $query->fetch();
if(isset($_POST['amount'])){
if ($count > 0){
session_start();
$_SESSION['id'] = $row['member_id'];
echo "Thank you for your Donation";
 
}else{
echo "ERROR"; 
}
   }
    ?>









































 
    
