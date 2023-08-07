<?php

  $conn = mysqli_connect('localhost','root', '','project');

  if($conn){
  	if(isset($_POST['submit'])){
  		$name=$_POST['name'];
  		$age=$_POST['age'];
  		$gender=$_POST['gender'];
  		$=$_POST['age'];
  		$gender=$_POST['gender'];
        $sql = "INSERT into 'childrens' ('name','age','gender') values ('$name','$age','$gender') ";

        $run= mysqli_query($conn,$sql);
        if ($run) {
        	header('location:welcome.php');
        }


  	}
  }


?>







<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>
    <div class="row">
    	<div class="contact-form">
    		<h4>insert</h4>
    		<form method="post">
    			<input class="input" type="text" name="name">
    			<input class="input" type="text" name="age">
    			<input class="input" type="text" name="gender">
    			<BUTTON class="main-button" type="submit" name="submit">button</BUTTON>
    		</form>
    		
    	</div>
    	
    </div>
</body>
</html>