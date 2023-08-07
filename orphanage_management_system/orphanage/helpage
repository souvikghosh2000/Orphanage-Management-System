
<style>
	table {
  border-collapse: collapse;
  width: 100%;

}
tr{
	background-color:orange; 
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  	}

tr:hover {background-color:pink;}
</style>
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
$sql = "SELECT * FROM childrens WHERE orphanageid=1";
$result = $conn->query($sql);

echo "<table><tr><th>name</th><th>age</th><th>gender</th></tr>";
	 while($row = $result->fetch_assoc()) {

	 echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td></tr>";


}
echo "</table>";
?>

     