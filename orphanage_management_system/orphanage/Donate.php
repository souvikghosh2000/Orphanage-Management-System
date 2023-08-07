<!DOCTYPE html>
<html>
<head>
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

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .container {
            padding: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: relative; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 75%; /* Full width */
            height: 75%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: #474e5d;
            padding-top: 50px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                        width: 50%; /* Could be more or less, depending on screen size */
        }

        /* Style the horizontal ruler */
        hr {
            
            margin-bottom: 25px;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 40px;
            font-weight: bold;
            color: #f1f1f1;
        }

            .close:hover,
            .close:focus {
                color: #f44336;
                cursor: pointer;
            }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
            .cancelbtn, .signupbtn {
                width: 50%;
            }
        }
    </style>
</head>
<body>
   

	<form action="donations.php" method="POST">
        <br>
        <br>
   <center><h1>Donation Form</h1></center>
              <div class="donates"> 
              <br>
              
                
                <center><label for="name"><b>&nbsp;&nbsp;&nbsp;Name</b>&nbsp;&nbsp;</label>
                <input type="text" placeholder="Enter Name" name="name" required><br>
                <label for="email"><b>&nbsp;&nbsp;&nbsp;Email</b>&nbsp;&nbsp;</label>
                <input type="text" placeholder="Enter Email" name="email" required>   <br>          
                <label for="phonenumber"><b>&nbsp;&nbsp;&nbsp;Phone Number</b>&nbsp;&nbsp;</label>
                <input type="text" placeholder="Phone Number" name="phonenumber" required><br>
                <label for="orphanage"><b>Select Orphanage</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                

                 
                 <select name="orphanage" style="size: 20%">
                        <option value="MotherTeresa">1-Mother Teresa</option>
    					<option value="HelpAge">2-HelpAge</option>
    					<option value="Swavalambha">3-Swavalambha</option>
                </select><br><br>
                





                <label for="Amount"><b>&nbsp;&nbsp;&nbsp;Donation Amount</b>&nbsp;&nbsp;</label>
                <input type="text" placeholder="Amount" name="amount" required><br>
                 <button type="submit">Submit</button> 
            </center>
            </div>    
             

</form>

</body>
</html>




