<style>
        
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 15%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

            /* Add a background color when the inputs get focus */
            input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;
            }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 20%;
            opacity: 0.9;
        }

            button:hover {
                opacity: 1;
            }
        </style>
    <center>
        <form class="modal-content" action="admininsert1.php" method="post">
            <div class="container">
                <h1>Please fill in this form to register new child into organisation.</h1>
                
                <hr>
                <label for="childid"><b>Childid</b></label>
                <input type="text" placeholder="Enter childid" name="childid" required><br>
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter name" name="name" required><br>
                <label for="age"><b>Age</b></label>
                <input type="text" placeholder="age" name="age" required><br>
                <label for="gender"><b>Gender</b></label>
                <input type="text" placeholder="gender" name="gender" required><br>
                <label for="orphanageid"><b>Orphanage Id</b></label>
                <input type="text" placeholder="orphanageid" name="orphanageid" required><br>
                <label for="date"><b>Date</b></label>
                <input type="text" placeholder="date" name="date" required>
<div class="clearfix"><br>
                
                    <button type="submit" class="signupbtn" name="submit">Sign Up</button>
                </div>

            </div>
                

               </center> 
        </form>
        <li><button>
          <a href="logout.php"><i class="icon-signout"></i> Logout</a>
        </button>
        </li>
        
 