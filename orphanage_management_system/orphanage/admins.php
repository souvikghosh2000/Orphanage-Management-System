<!DOCTYPE html>
<html>
<head>
	<style>
.dot, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.dot{
  width: 100%;
  background-color: #4CAF50;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
 <div>
    <center>
        <h1>
            HELLO ADMIN
        </h1>

        <form action="adminconn.php" method="post" class="dot">
            


            <div class="container">
                <p><label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter username" name="username" required>
                </p>
                <p>
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                </p>
                <button type="submit">Login</button>
            </div>   
            </form>
            </center> 
</body>
</html>

