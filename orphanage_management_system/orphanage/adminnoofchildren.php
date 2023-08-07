<!DOCTYPE html>
<html>
<head>
  <title></title>

  <style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 280px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body>
  <div class="gallery">
     <h1> Motherteressa</h1>
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
</tr>

<?php
}
echo "</table>";

?>
</div>
<div class="gallery">
<h1> helpage</h1>
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
$sql = "SELECT * FROM childrens WHERE orphanageid=2";
$result = $conn->query($sql);




echo "<table><tr><th>name</th><th>age</th><th>gender</th></tr>";
   while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      
<?php
   echo "<td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td>";
?>
</tr>

<?php
}
echo "</table>";

?>
</div>
<div class="gallery">
<h1> Swavalamba</h1>
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
$sql = "SELECT * FROM childrens WHERE orphanageid=3";
$result = $conn->query($sql);




echo "<table><tr><th>name</th><th>age</th><th>gender</th></tr>";
   while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      
<?php
   echo "<td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td>";
?>
</tr>

<?php
}
echo "</table>";

?>
 </div>
<br>
<footer>
<li><button>
          <a href="logout.php"><i class="icon-signout"></i> Logout</a>
        </button>
        </li>
     </footer>
</body>

</html>