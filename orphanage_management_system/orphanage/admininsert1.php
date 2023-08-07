<?php   
$conn = new PDO('mysql:host=localhost;dbname=project', 'root', '');
     

 
    $childid=$_POST['childid'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $orphanageid=$_POST['orphanageid'];
    $date=$_POST['date'];
       $query=$conn->query("insert into childrens(childid,name,age,gender,orphanageid,date) values('$childid','$name','$age','$gender','$orphanageid','$date')");
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