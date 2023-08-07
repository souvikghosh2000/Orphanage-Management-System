<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
     <h1>in motherteressa</h1>
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
$sql = "SELECT * FROM login;
$result = $conn->query($sql);




echo "<table><tr><th>name</th><th>ashramid</th><th>gender</th></tr>";
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

<h1>in swavalamba</h1>
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
<h1>in swavalamba</h1>
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
</body>
</html>