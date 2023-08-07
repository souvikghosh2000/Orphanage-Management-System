
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
$sql = "SELECT * FROM createaccount";
$result = $conn->query($sql);




echo "<table><tr><th>username</th><th>address</th><th>phonenumber</th><th>email</th><th>password</th></tr>";
   while($row = $result->fetch_assoc()) {
    ?>
      <tr>
      
<?php
   echo "<td>".$row["username"]."</td><td>".$row["address"]."</td><td>".$row["phonenumber"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td>";
?>

</tr>

<?php
}
echo "</table>";
?>
<li><button>
          <a href="logout.php"><i class="icon-signout"></i> Logout</a>
        </button>
        </li>