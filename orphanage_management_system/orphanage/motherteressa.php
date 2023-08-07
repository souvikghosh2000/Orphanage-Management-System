
<style>
	table,.hello {
  border-collapse: collapse;
  width: 100%;

}
tr,.hello{
	background-color:orange; 
}

th, td,.hello {
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
	 	?>
	 	<tr>
	 		
<?php
	 echo "<td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td>";
?>
<td>
	<form  method="post">
		<div>
			<button value="register?">
		<input type="submit" name="keyTodelete"  value="<?php echo $row['childid'];?>" required>Adopt?
		</button>
   </div>
</form>
    
   
	</td>

  </tr>

<?php
}
echo "</table>";

?>



<?php
           

           
      if(isset($_POST['keyTodelete']))
   {
   	$key=$_POST['keyTodelete'];

$sql = "SELECT * FROM childrens WHERE childid='$key'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
      

	$sql = "DELETE FROM childrens WHERE childid='$key'";
$result = $conn->query($sql); 
}
}
?>
<li><button>
          <a href="logout.php"><i class="icon-signout"></i> Logout</a>
        </button>
        </li>