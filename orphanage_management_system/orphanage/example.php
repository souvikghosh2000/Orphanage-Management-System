<!DOCTYPE html>
<html>
<head>
	<title>table</title>
</head>
<body>
   <table>
   	<tr>
   	<th>name</th>
   	<th>age</th>
   	<th>gender</th>
   </tr>
   <?php
       $conn = new PDO('mysql:host=localhost;dbname=project', 'root', '');
       if($conn->connect_error){
       	die("connection Failed:".$conn->connect_error);
       }
       $sql="Select name,age,gender from children";
       $result=$conn->query($sql);

       if($result->num_rows>0){
       	while($row=$result->fetch_assoc()){
       		echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td></tr>;"
       	}
       	echo "</table>";

       }
       else{
           echo "0 result";
       }
       $conn->close();
       ?>
   </table>
</body>
</html>